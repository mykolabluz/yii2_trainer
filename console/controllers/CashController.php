<?php

namespace console\controllers;

use yii\helpers\Console;
use console\models\Employee;
use console\models\Sender;


/**
 * @author mukol
 */
class CashController extends \yii\console\Controller
{
    public function actionSend()
    {
        $employees = Employee::getList();
        
        $count = Sender::go($employees);
        
        Console::output("\nEmails sent: {$count}");
    }
}
