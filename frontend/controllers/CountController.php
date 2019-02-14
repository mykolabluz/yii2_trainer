<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

/**
 * Description of CountController
 *
 * @author mukol
 */
class CountController extends Controller {
    
    public function actionIndex()
    {
        
        $list = Test::getCount();
        
        return $this->render('index', [
            'list' => $list,
        ]);
    }
}
