<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * @author mukol
 */
class NewsSearch2 
{
    
    public function fulltextSearch($keyword)
    {
        $params = [
            ':keyword' => $keyword,
        ];
        
        $sql = "SELECT * FROM news WHERE MATCH (content) AGAINST (:keyword) LIMIT 20";;
        return  Yii::$app->db->createCommand($sql)->bindValues($params)->queryAll();
               
    }
    
    public function advancedSearch($keyword)
    {
        $sql = "SELECT * FROM idx_news_content WHERE MATCH('$keyword') OPTION ranker=WORDCOUNT";
        $data = Yii::$app->sphinx->createCommand($sql)->queryAll();
        
        $ids = ArrayHelper::map($data, 'id', 'id');
        
               
        $data = News::find()->where(['id' => $ids])->asArray()->all();
        
//        echo '<pre>';
//        print_r($data);
//        echo '<pre>';die;
        
        $data = ArrayHelper::index($data, 'id');
        
//        echo '<pre>';
//        print_r($data);
//        echo '<pre>';die;
//        $results = [];
        
        foreach ($ids as $element) {
//            echo $element;
//            echo '<br>';
//            echo '<pre>';
//            print_r($data[$element]);
//            echo '<pre>';
            $results[] = [
                'id' => $element,
                'title' => $data[$element]['title'],
                'content' => $data[$element]['content'],
            ];
        }
        
        
        return $results;
//        echo '<pre>';
//        print_r($data);
//        echo '<pre>';die;
               
    }
}
