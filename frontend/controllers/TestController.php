<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;
use frontend\models\example\ExampleValidation;

use frontend\models\User;

class TestController extends Controller
{
    
    public function actionValidation()
    {
        $model = new ExampleValidation();
        
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            
            $model->attributes = $formData;
                    
            if ($model->validate()) {
                
                echo '<pre>';
                print_r($model->attributes);
                echo '<pre>';die;
                
                Yii::$app->session->setFlash('success', 'Data validates');
            }
        }
        
        return  $this->render('validation', [
            'model' => $model,
        ]);
    }


    public function actionIndex()
    {
        
        $max = Yii::$app->params['maxNewsInList'];
        
        $list = Test::getNewsList($max);
        
        return $this->render('index', [
            'list' => $list,
        ]);
    }
    
    
    public function actionView($id)
    {
        $item = Test::getItem($id);
        
        return $this->render('view', [
            'item' => $item
        ]);
    }

        public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
                ->setFrom('mukolakolia@gmail.com')
                ->setTo('mukolakolia@gmail.com')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
        
        var_dump($result);
        die;
    }
    
    public function actionUser()
    {
        $user = new User();
        
        echo 'test<br>';
    }
}