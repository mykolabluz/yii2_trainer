<?php


namespace console\models;

use Yii;

/**
 * @author mukol
 */
class Sender 
{
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber) {
            
            
            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newsList' => $newsList,
            ])
                    ->setFrom('prosto@nada.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();

            var_dump($result);
        }
    }
    
    public static function go($employees)
    {
        foreach ($employees as $employee) {
                        
            $result = Yii::$app->mailer->compose('/mailer/cash', [
                'employee' => $employee,
            ])
                    ->setFrom('mukolakolia@gmail.com')
                    ->setTo($employee['email'])
                    ->setSubject('Зароботная плата')
                    ->send();
            var_dump($result);
        }
    }

}
