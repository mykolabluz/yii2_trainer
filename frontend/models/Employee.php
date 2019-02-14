<?php


namespace frontend\models;

use yii\base\Model;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * @author mukol
 */
class Employee extends Model
{
    
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';


    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $birth;
    public $startedWork;
    public $city;
    public $position;
    public $code;


    public function scenarios() {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'email', 'birth', 'startedWork', 'city', 'position', 'code'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }
    
    public function rules() {
        return [
            [['firstName', 'lastName', 'email', 'startedWork', 'position', 'code', 'birth'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3 ],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['birth'], 'date', 'format' => 'php:Y-m-d'],
            [['startedWork'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['code'], 'string', 'min' => 10, 'max' => 10],
        ];
    }
    
    public function save()
    {
        
        return Yii::$app->db->createCommand()->insert('employee',[
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'middleName' => $this->middleName,
            'Date of Birth' => $this->birth,
            'Date of started work' => $this->startedWork,
            'City' => $this->city,
            'position' => $this->position,
            'Identification code' => $this->code,
            'email' => $this->email,
        ])->execute();
    }
    
    public static function getSalary($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM employee ORDER BY salary DESC LIMIT '.$max;
        
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $result;
    }
    
    public static function find()
    {
        $sql = 'SELECT * FROM employee';
        return  Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public  function getCitiesList()
    {
        $sql = 'SELECT * FROM city';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id', 'name');
    }
}
