<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * @author mukol
 */
class Book extends ActiveRecord
{
    
    public static function tableName()
    {
        return '{{book}}';
    }
    
    public function rules() 
    {
        return [
            [['name', 'publisher_id'], 'required'],
            [['date_published'], 'date', 'format' => 'php:Y-m-d'],
            [['isbn'], 'string', 'max' => 10],
        ];
    }
    
    
    public function getDatePublished()
    {
        return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : "Not set";
    }
    
    public function getPublisher()
    {
        return  $this->hasOne(Publisher::class, ['id' => 'publisher_id'])->one();
    }
    
    public function getPublisherName()
    {
        if ($publisher = $this->getPublisher()) {
            return  $publisher->name;
        }
        return  "Kurva";
    }
    
    
    public function getBookToAuthorRelations()
    {
        return  $this->hasMany(BookToAuthor::class, ['book_id' => 'id']);
    }
    
    public function getAuthors()
    {
        return  $this->hasMany(Author::class, ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
    }

    
}
