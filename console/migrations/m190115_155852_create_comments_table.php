<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m190115_155852_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(50),
            'comments' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
