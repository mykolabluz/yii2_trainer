<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscriber`.
 */
class m181224_124055_create_subscriber_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subscriber', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subscriber');
    }
}
