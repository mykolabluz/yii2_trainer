<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\NewsSearch2;
use frontend\models\NewsSearch;


/**
 * @author mukol
 */
class SearchForm extends Model
{
    public $keyword;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return[
            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['keyword', 'string', 'min' => 3],
        ];
    }
    
    public function search()
    {
        
        if ($this->validate()) {
            $model = new NewsSearch();
            return  $model->simpleSearch($this->keyword);
        }
    }
    
    public function searchFulltext()
    {
        
        if ($this->validate()) {
            $model = new NewsSearch2();
            return  $model->fulltextSearch($this->keyword);
        }
    }
    
    public function searchAdvanced()
    {
        
        if ($this->validate()) {
            $model = new NewsSearch2();
            return  $model->advancedSearch($this->keyword);
        }
    }
    
}
