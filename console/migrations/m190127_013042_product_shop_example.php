<?php

use yii\db\Migration;

/**
 * Class m190127_013042_product_shop_example
 */
class m190127_013042_product_shop_example extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createProducts();
        $this->createCategories();
        $this->createFabricatories();
        $this->createProductsToFabricatories();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
        $this->dropTable('category');
        $this->dropTable('fabricator');
        $this->dropTable('product_to_fabricator');
    }

    private function createProducts()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'isbn' => $this->string(),
            'category_id' => $this->integer(),
        ]);
        
        $this->insert('product', [
            'id' => 1,
            'name' => 'Арахис',
            'isbn' => '34638534',
            'category_id' => 3,
        ]);
        
        $this->insert('product', [
            'id' => 2,
            'name' => 'Макароны',
            'isbn' => '3328534',
            'category_id' => 1,
        ]);
        
        $this->insert('product', [
            'id' => 3,
            'name' => 'Селедка',
            'isbn' => '534',
            'category_id' => 5,
        ]);
        
        $this->insert('product', [
            'id' => 4,
            'name' => 'Халва',
            'isbn' => '34622534',
            'category_id' => 8,
        ]);
        
        $this->insert('product', [
            'id' => 5,
            'name' => 'Капуста',
            'isbn' => '7638534',
            'category_id' => 4,
        ]);
        
        $this->insert('product', [
            'id' => 6,
            'name' => 'Окарачка',
            'isbn' => '3477534',
            'category_id' => 5,
        ]);
        
        $this->insert('product', [
            'id' => 7,
            'name' => 'Овсянка',
            'isbn' => '99638534',
            'category_id' => 6,
        ]);
        
        $this->insert('product', [
            'id' => 8,
            'name' => 'Морква',
            'isbn' => '34638588',
            'category_id' => 4,
        ]);
        
        $this->insert('product', [
            'id' => 9,
            'name' => 'Хлеб',
            'isbn' => '9098534',
            'category_id' => 1,
        ]);
        
        $this->insert('product', [
            'id' => 10,
            'name' => 'Молоко',
            'isbn' => '34637734',
            'category_id' => 7,
        ]);
        
        $this->insert('product', [
            'id' => 11,
            'name' => 'Пиво',
            'isbn' => '70638534',
            'category_id' => 2,
        ]);
        
        $this->insert('product', [
            'id' => 12,
            'name' => 'Водка',
            'isbn' => '111138534',
            'category_id' => 2,
        ]);
        
        $this->insert('product', [
            'id' => 13,
            'name' => 'Сухарики',
            'isbn' => '34638111',
            'category_id' => 3,
        ]);
        
        $this->insert('product', [
            'id' => 14,
            'name' => 'Чипси',
            'isbn' => '3228534',
            'category_id' => 3,
        ]);
        
        $this->insert('product', [
            'id' => 15,
            'name' => 'Огурцы',
            'isbn' => '346385222',
            'category_id' => 4,
        ]);
        
        $this->insert('product', [
            'id' => 16,
            'name' => 'Мясо',
            'isbn' => '33238534',
            'category_id' => 5,
        ]);
        
        $this->insert('product', [
            'id' => 17,
            'name' => 'Гречка',
            'isbn' => '34555534',
            'category_id' => 6,
        ]);
        
        $this->insert('product', [
            'id' => 18,
            'name' => 'Вода',
            'isbn' => '34448534',
            'category_id' => 7,
        ]);
        
        $this->insert('product', [
            'id' => 19,
            'name' => 'Жвачка',
            'isbn' => '34666664',
            'category_id' => 8,
        ]);
    }
    
    private function createCategories()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
        
        $this->insert('category', [
            'id' => 1,
            'name' => 'Хлебобулочные изделия',
        ]);
        
        $this->insert('category', [
            'id' => 2,
            'name' => 'Спиртные напитки',
        ]);
        
        $this->insert('category', [
            'id' => 3,
            'name' => 'Закуска',
        ]);
        
        $this->insert('category', [
            'id' => 4,
            'name' => 'Овощи',
        ]);
        
        $this->insert('category', [
            'id' => 5,
            'name' => 'Мясо и Рыба',
        ]);
        
        $this->insert('category', [
            'id' => 6,
            'name' => 'Крупы',
        ]);
        
        $this->insert('category', [
            'id' => 7,
            'name' => 'Безалкоголка и молоко',
        ]);
        
        $this->insert('category', [
            'id' => 8,
            'name' => 'Другое',
        ]);
        
    }
    
        
    private function createFabricatories()
    {
        $this->createTable('fabricator', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
        
        $this->insert('fabricator', [
            'id' => 1,
            'name' => 'Оболонь',
        ]);
        
        $this->insert('fabricator', [
            'id' => 2,
            'name' => 'Сильпо',
        ]);
        
        $this->insert('fabricator', [
            'id' => 3,
            'name' => 'Атб',
        ]);
        
        $this->insert('fabricator', [
            'id' => 4,
            'name' => 'Мясокорпорейшин',
        ]);
        
        $this->insert('fabricator', [
            'id' => 5,
            'name' => 'Мелочи жизни',
        ]);
        
        $this->insert('fabricator', [
            'id' => 6,
            'name' => 'Продукты первой необходимости',
        ]);

    }
    
    private function createProductsToFabricatories()
    {
        $this->createTable('product_to_fabricator', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'fabricator_id' => $this->integer(),
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 1,
            'product_id' => 1,
            'fabricator_id' => 3,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 2,
            'product_id' => 1,
            'fabricator_id' => 2,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 3,
            'product_id' => 2,
            'fabricator_id' => 3,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 4,
            'product_id' => 2,
            'fabricator_id' => 6,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 5,
            'product_id' => 2,
            'fabricator_id' => 1,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 6,
            'product_id' => 3,
            'fabricator_id' => 1,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 7,
            'product_id' => 3,
            'fabricator_id' => 2,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 8,
            'product_id' => 4,
            'fabricator_id' => 4,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 9,
            'product_id' => 5,
            'fabricator_id' => 5,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 10,
            'product_id' => 6,
            'fabricator_id' => 6,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 11,
            'product_id' => 7,
            'fabricator_id' => 2,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 12,
            'product_id' => 7,
            'fabricator_id' => 4,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 13,
            'product_id' => 7,
            'fabricator_id' => 6,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 14,
            'product_id' => 8,
            'fabricator_id' => 5,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 15,
            'product_id' => 9,
            'fabricator_id' => 1,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 16,
            'product_id' => 9,
            'fabricator_id' => 6,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 17,
            'product_id' => 10,
            'fabricator_id' => 1,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 18,
            'product_id' => 10,
            'fabricator_id' => 2,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 19,
            'product_id' => 10,
            'fabricator_id' => 5,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 20,
            'product_id' => 11,
            'fabricator_id' => 1,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 21,
            'product_id' => 11,
            'fabricator_id' => 2,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 22,
            'product_id' => 12,
            'fabricator_id' => 5,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 23,
            'product_id' => 12,
            'fabricator_id' => 6,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 24,
            'product_id' => 13,
            'fabricator_id' => 1,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 25,
            'product_id' => 14,
            'fabricator_id' => 4,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 26,
            'product_id' => 14,
            'fabricator_id' => 5,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 27,
            'product_id' => 15,
            'fabricator_id' => 3,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 28,
            'product_id' => 15,
            'fabricator_id' => 2,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 29,
            'product_id' => 16,
            'fabricator_id' => 6,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 30,
            'product_id' => 17,
            'fabricator_id' => 4,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 31,
            'product_id' => 18,
            'fabricator_id' => 5,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 32,
            'product_id' => 19,
            'fabricator_id' => 4,
        ]);
        
        $this->insert('product_to_fabricator', [
            'id' => 33,
            'product_id' => 19,
            'fabricator_id' => 6,
        ]);
    }
    
    
}
