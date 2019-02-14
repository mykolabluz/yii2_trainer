<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;


class AliasController extends Controller
{
    
    public function actionExample()
    {
        
//        Yii::setAlias('@files', '/var/www/project/frontend/web/files');
//        
        $result = mkdir(Yii::getAlias('@files').'/photos');
        var_dump($result);
        
//        echo Yii::getAlias('@photos');
    }
}
