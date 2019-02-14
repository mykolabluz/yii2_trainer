<?php

namespace frontend\controllers;

use frontend\models\Book;
use Yii;
use frontend\models\Publisher;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
//        $query = Book::find();
//        
//        $query->where(['publisher_id' => 1]);
//        
//        $query->orderBy('date_published');
//        $query->limit(2);
//        
//        $booklist = $query->all();
        
        // Оптимизация кода
        
//        $conditions = ['publisher_id' => 1];
//        $booklist = Book::find()->where($conditions)->orderBy('date_published')->limit(2)->all();
        $booklist = Book::find()->orderBy('date_published')->limit(5)->all();
        
//        echo '<pre>';
//        print_r($result);
//        echo '<pre>';die;
        
        
        
        
        return $this->render('index', [
            'booklist' => $booklist,
        ]);
        
        
//        $book = new Book();
////        $book->name = 'Test book';
////        $book->isbn = '3463262364';
//        $book->save();
//        
//        echo '<pre>';
//        print_r($book->getErrors());
//        echo '<pre>';die;
        
//        return $this->render('index');
    }
    
    public function actionCreate()
    {
        $book = new Book();
        
        $publishers = Publisher::getList();
        
        if ($book->load(Yii::$app->request->post()) && $book->save()) {
                Yii::$app->session->setFlash('success', 'Saved!');
                // перекидает на другую страницу
//                return  $this->redirect(['bookshop/index']);
                // обновляет страницу
                return  $this->refresh();
                
        }
        
        return  $this->render('create', [
            'book' => $book,
            'publishers' => $publishers,
        ]);
    }

}
