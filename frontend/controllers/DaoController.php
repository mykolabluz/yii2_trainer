<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

/**
 * Description of DaoController
 *
 * @author mukol
 */
class DaoController extends Controller 
{
    
    public function actionIndex()
    {
        $db = new \yii\db\Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'yii2user',
            'password' => '111111',
            'charset' => 'utf8',
        ]);
        
        $sql = 'SELECT * FROM city';
        $command = new \yii\db\Command([
            'db' => $db,
            'sql' => $sql,
        ]);
        
        $arrayWithResults = $command->queryAll();
        
        /////////
        
        $array2 = Yii::$app->db->createCommand($sql)->queryAll();
        
        var_dump($arrayWithResults);
        echo '<hr>';
        var_dump($array2);
        
//        return  $this->render('index');
    }
    
    public function actionExample()
    {
        // #1
        $sql1 = 'SELECT * FROM city';
        $result1 = Yii::$app->db->createCommand($sql1)->queryAll();
        echo '<pre>';
        print_r($result1);
        echo '<pre>';
        
        echo '<hr>';
        
        // #2
        $sql2 = 'SELECT * FROM test';
        $result2 = Yii::$app->db2->createCommand($sql2)->queryAll();
        echo '<pre>';
        print_r($result2);die;
        echo '<pre>';
        
        
        return  $this->render('index');
    }
    
    
    public function actionNews()
    {

//        $sql1 = 'SELECT COUNT(*) as count FROM news';
//        $result1 = Yii::$app->db->createCommand($sql1)->queryScalar();
//        echo '<pre>';
//        print_r($result1);
//        echo '<pre>';die;
        
        
        $sql1 = 'DELETE FROM news WHERE id = 3';
        $result1 = Yii::$app->db->createCommand($sql1)->execute();
        echo '<pre>';
        var_dump($result1);
        echo '<pre>';die;

        
        
        return  $this->render('index');
    }
}
