<?php

use yii\db\Migration;

/**
 * Class m190106_162522_add_position_salary_to_employee_table
 */
class m190106_162522_add_position_salary_to_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employee', 'salary', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employee', 'salary');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190106_162522_add_position_salary_to_employee_table cannot be reverted.\n";

        return false;
    }
    */
}
