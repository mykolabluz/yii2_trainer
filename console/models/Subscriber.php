<?php

namespace console\models;

use Yii;

/**
 * @author mukol
 */
class Subscriber
{
    
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
