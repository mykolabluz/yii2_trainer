<?php

namespace frontend\widgets\employee;

use Yii;
use yii\base\Widget;
use frontend\models\Employee;

/**
 * @author mukol
 */
class Salary extends Widget
{
    public $showLimit = null;
    
    public function run()
    {
                
        $max = Yii::$app->params['maxSalary'];
        if ($this->showLimit) {
            $max = $this->showLimit;
        }
        
        $list = Employee::getSalary($max);
        
        return $this->render('block', [
            'list' => $list,
        ]);
    }
}
