<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

/**
 * @author mukol
 */
class Comments extends Model
{
    
    public $name;
    public $email;
    public $comments;
    
    public function rules() {
        return [
            [['name', 'email', 'comments'], 'required'],
            [['name'], 'string', 'min' => 2],
            [['email'], 'email'],
            [['comments'], 'string', 'min' => 2],
        ];
    }
    
    public function save()
    {
        return Yii::$app->db->createCommand()->insert('comments', [
            'name' => $this->name,
            'email' => $this->email,
            'comments' => $this->comments,
        ])->execute();
    }
    
    public static function getComments()
    {
        $sql = 'SELECT * FROM comments';
        
        $result =  Yii::$app->db->createCommand($sql)->queryAll();
        
        return  $result;
    }
    
    public static function find()
    {
        $sql = 'SELECT * FROM comments';
        return  Yii::$app->db->createCommand($sql)->queryAll();
    }
}
