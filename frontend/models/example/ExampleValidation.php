<?php


namespace frontend\models\example;

class ExampleValidation extends \yii\base\Model
{
    
    public $options;
    
    public function rules() {
        return  [
            [['options'], 'required'],
            [['options'], 'each', 'rule' => ['integer']],
        ];
    }




//    public $siteAddress;
//    
//    public function rules() {
//        return  [
//            [['siteAddress'], 'required'],
//            [['siteAddress'], 'url', 'defaultScheme' => 'http'],
//        ];
//    }




//    public $startValue;
//    public $endValue;
//    
//    public function rules() {
//        return  [
//            [['startValue'], 'compare',
//                'compareAttribute' => 'endValue',
//                'operator' => '<'
//            ],
//            [['endValue'], 'safe'],
//        ];
//    }


//    const STATUS_ACTIVE = 1;
//    const STATUS_DISABLED = 2;
//    const STATUS_ARCHIVED = 3;
//
//
//    public $testAttribute;
//    
//    public function rules()
//    {
//        return  [
////            [['testAttribute'], 'required'],
////            [['testAttribute'], 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_ARCHIVED]],
//          //    [['testAttribute'], 'date', 'format' => 'php:Y-m-d'], // 1999-01-22
//              [['testAttribute'], 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/'],
//        ];
//    }
}
