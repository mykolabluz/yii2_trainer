<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * @author mukol
 */
class NivoController extends Controller
{
    
    public function actionIndex()
    {
        
        return $this->render('index');
    }
}
