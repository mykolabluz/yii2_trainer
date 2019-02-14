<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;
use frontend\models\events\UserRegisteredEvent;

/**
 * @author mukol
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return[
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::class],
            
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'min' => 6],
            [['email'], 'unique', 'targetClass' => User::class],
            
            ['password' , 'required'],
            ['password' , 'string', 'min' => 6],
        ];
    }
    
    /**
     * Save user
     * @return User|null
     */
    
    public function save()
    {
        if ($this->validate()) {
            $user = new User();
            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
            
            if ($user->save()) {
                
                $event = new UserRegisteredEvent();
                $event->user = $user;
                $event->subject = 'New user registered, kurva!!!';
                
                $user->trigger(User::USER_REGISTERED, $event);
                
//                Yii::$app->emailService->notifyUser($user, 'Welcome');
//                Yii::$app->emailService->notifyAdmins('User register');
//                
                return  $user;
            }
        }
    }
    
}
