<?php

namespace frontend\controllers;

use yii\web\Controller;
use Faker\Factory;
//use frontend\models\News;
use Yii;

/**
 * @author mukol
 */
class TestsearchController extends Controller {

    public function actionGenerate()
    {
        // медленый способ добавляет по одной записи
//        for($i = 0; $i < 100; $i++) {
//            /* @var $faker Faker\Generator */
//            $faker =  Factory::create();
//
//            $newsItem = new News(); 
//
//            $newsItem->title = $faker->text(35);
//            $newsItem->content = $faker->text(1000, 2000);
//            $newsItem->status = rand(0, 1);
//
//            $newsItem->save();
//        }
//        die('stop');
        
        /* @var $faker Faker\Generator */
        $faker = Factory::create();
        
        for($j = 0; $j < 1000; $j++) {
            
            $news = [];
            for ($i = 0; $i < 1000; $i++) {
                $news[] = [$faker->text(rand(30, 45)), $faker->text(rand(2000, 3000)), rand(0, 3)];
            }
            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
        }
        die('stop');
    }

}
