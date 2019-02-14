<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m181227_163904_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(),
            'lastName' => $this->string(),
            'middleName' => $this->string(),
            'Date of Birth' => $this->date(),
            'Date of started work' => $this->date(),
            'City' => $this->string(),
            'Work experience' => $this->integer(2),
            'position' => $this->string(),
            'Department number' => $this->integer(11),
            'Identification code' => $this->integer(40),
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
}
