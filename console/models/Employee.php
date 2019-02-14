<?php

namespace console\models;

use Yii;

/**
 * @author mukol
 */
class Employee 
{
    public static function getList()
    {
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
