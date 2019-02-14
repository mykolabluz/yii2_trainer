<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * @author mukol
 */
class Product extends ActiveRecord
{
    public static function tableName()
    {
        return '{{product}}';
    }
    
    public function rules() 
    {
        return [
            [['name', 'isbn', 'category_id'], 'required'],
        ];
    }
    
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id'])->one();
    }

        public function getCategoryName()
    {
        if ($category = $this->getCategory()) {
            return $category->name;
        }
        return  "Kurva";
    }
    
    public function getProductToFabricatorRelations()
    {
        return $this->hasMany(ProductToFabricator::class, ['product_id' => 'id']);
    }
    
    public function getFabricators()
    {
        return $this->hasMany(Fabricator::class, ['id' => 'fabricator_id'])->via('productToFabricatorRelations')->all();
    }
    
    public function getCategoriesList()
    {
        $sql = 'SELECT * FROM category';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id', 'name');
    }
}
