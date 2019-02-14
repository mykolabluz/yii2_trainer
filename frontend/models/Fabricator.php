<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * @author mukol
 */
class Fabricator extends ActiveRecord
{
    public static function tableName()
    {
        return '{{fabricator}}';
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
    
    public function getName()
    {
        if ($this->name) {
            return  $this->name;
        }
        return "Bratishka netupi";
       
    }
}
