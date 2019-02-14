<?php

use yii\db\Migration;

/**
 * Handles adding position to table `post`.
 */
class m181225_125330_add_position_column_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employee', 'Оклад', $this->integer(6));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employee', 'Оклад');
    }
}
