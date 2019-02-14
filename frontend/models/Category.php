<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * @author mukol
 */
class Category extends ActiveRecord
{
    public static function tableName()
    {
        return '{{category}}';
    }
    
    public function rules() 
    {
        return [
            ['name', 'required'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
