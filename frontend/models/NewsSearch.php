<?php

namespace frontend\models;

use Yii;

/**
 * @author mukol
 */
class NewsSearch 
{
    
    public function simpleSearch($keyword)
    {
        // TODO: fix security issue (hometask)
//        $sql = "SELECT * FROM {{news}} WHERE [[content]] LIKE '%$keyword%' LIMIT 20";
//        return  Yii::$app->db->createCommand($sql)->queryAll();
        
        /* bindParam or bindValue */
//        $sql = 'SELECT * FROM {{news}} WHERE [[content]] LIKE :keyword LIMIT 20';
//        $keyword = "%".$keyword."%";
//        return  Yii::$app->db->createCommand($sql)->bindParam(':keyword', $keyword)->queryAll();
        
        
        $sql = 'SELECT * FROM {{news}} WHERE [[content]] LIKE :keyword LIMIT 20';
        $keyword = "%".$keyword."%";
        return  Yii::$app->db->createCommand($sql)->bindValue(':keyword', $keyword)->queryAll();
        
        
    }
}
