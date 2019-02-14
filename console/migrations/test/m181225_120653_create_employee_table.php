<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m181225_120653_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'ФИО' => $this->string(),
            'Дата Рождения' => $this->date(),
            'Дата начала работы' => $this->date(),
            'Город' => $this->string(),
            'Стаж работы' => $this->integer(2),
            'Должность' => $this->string(),
            'Номер отдела' => $this->integer(11),
            'Индентификационый код' => $this->integer(40),
            'email' => $this->string(50),
        ]);
        
 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }
    
    public function add()
    {
        
    }

}
