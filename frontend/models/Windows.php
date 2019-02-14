<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class Windows extends Model
{
    
    public $width;
    public $height;
    public $numberCameras;
    public $numberLeaves;
    public $flaps;
    public $color;
    public $windowsill;
    public $email;
    public $customerName;


    public function rules() {
        return [
            [['width', 'height', 'numberCameras', 'numberLeaves', 'flaps', 'color', 'windowsill', 'email', 'customerName'], 'required'],
            [['width'], 'integer', 'min' => 70, 'max' => 210],
            [['height'], 'integer', 'min' => 100, 'max' =>200],
            [['numberLeaves'], 'integer', 'min' => 1, 'max' =>10],
            [['flaps'], 'integer', 'min' => 1, 'max' =>10],
            [['email'], 'email'],
            [['customerName'], 'string', 'length' => [2, 20]],
        ];
    }
    
    public function mail()
    {
            return Yii::$app->mailer->compose('/mailer/orders', [
                'model' => $this,
            ])
                ->setFrom('testirophp@gmail.com')
                ->setTo('mukolakolia@gmail.com')
                ->setSubject('Orders windows')
//                ->setTextBody('Okno chiki')
//                ->setHtmlBody($this->customerName)
                ->send();
    }
}

