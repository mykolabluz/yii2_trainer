<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Comments;
/**
 * @author mukol
 */
class CommentsController extends Controller
{
    
    public function actionAdd()
    {
        $comments = Comments::find();
        
        $model = new Comments();
                
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            
            $model->attributes = $formData;
            
            if ($model->validate() && $model->save()) {
            
                
//                echo '<pre>';
//                print_r($model->attributes);
//                echo '<pre>';die;
                
//                Yii::$app->session->setFlash('success', 'Registered');
            }    
        }
        
        return  $this->render('comments', [
                'model' => $model,
                'comments' => $comments,
                ]);
    }
}
