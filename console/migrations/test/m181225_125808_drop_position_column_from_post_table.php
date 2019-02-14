<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `post`.
 */
class m181225_125808_drop_position_column_from_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('employee', 'Город');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('employee', 'Город', $this->string());
    }
}
