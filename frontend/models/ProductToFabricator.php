<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product_to_fabricator".
 *
 * @property int $id
 * @property int $product_id
 * @property int $fabricator_id
 */
class ProductToFabricator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_to_fabricator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'fabricator_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'fabricator_id' => 'Fabricator ID',
        ];
    }
}
