<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Windows;

class WindowsController extends Controller
{
    
    public function actionOrders()
    {
        
        $model = new Windows();
        
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            
            if ($model->validate() && $model->mail()) {
                
//                echo '<pre>';
//                print_r($model->attributes);
//                echo '<pre>';die;
                
                Yii::$app->session->setFlash('success', 'Your order was sent manager');
            }
        }        
        
        return $this->render('orders', [
        'model' => $model,
    ]);
        
    }
    
    
    
}
