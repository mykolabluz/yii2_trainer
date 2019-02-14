<?php

namespace frontend\controllers;

use frontend\models\Author;
use Yii;
use frontend\controllers\behaviors\AccessBehavior;

class AuthorController extends \yii\web\Controller
{
    public function behaviors() {
        return [
            AccessBehavior::class,
        ];
    }

    public function actionCreate()
    {
        $this->checkAccess();
        
        $model = new Author();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Author added');
            return $this->redirect(['author/index']);
        }
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->checkAccess();
        
        $model = Author::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Author has been deleted');
        
        return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
        
        $this->checkAccess();     
        
        $authorsList = Author::find()->all();
        
        return $this->render('index', [
            'authorsList' => $authorsList,
        ]);
    }

    public function actionUpdate($id)
    {
        $this->checkAccess();
        
        $model = Author::findOne($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Author has been update');
            return $this->redirect(['author/index']);
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }
  

}
