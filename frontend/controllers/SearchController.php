<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\forms\SearchForm;

/**
 * @author mukol
 */
class SearchController extends Controller
{
    
    public function actionIndex()
    {
        
        $model = new SearchForm();
        
        $results = null;
        
        if ($model->load(Yii::$app->request->post())) {
            $results = $model->search();
        }
        
        return  $this->render('index', [
            'model' => $model,
            'results' => $results,
        ]);
    }
    
    public function actionFulltext()
    {
        
        $model = new SearchForm();
        
        $results = null;
        
        if ($model->load(Yii::$app->request->post())) {
            $results = $model->searchFulltext();
        }
        
        return  $this->render('fulltext', [
            'model' => $model,
            'results' => $results,
        ]);
    }
    
    public function actionAdvanced()
    {
        
        $model = new SearchForm();
        
        $results = null;
        
        if ($model->load(Yii::$app->request->post())) {
            $results = $model->searchAdvanced();
        }
        
        return  $this->render('Advanced', [
            'model' => $model,
            'results' => $results,
        ]);
    }
}
