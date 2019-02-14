<?php

/* @var $employees array */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;


$emails = ArrayHelper::getColumn($employees, 'email');

echo implode(' ,', $emails);

echo '<hr>';

// Array helpers with HTML list:

$array = [
    '1' => 'Beirunt',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Rome',
];

$listData = ArrayHelper::map($employees, 'firstName', 'email');

echo '<pre>';
print_r($listData);
echo '<pre>';

echo Html::dropDownList('email', [], $listData);