<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m191002_203338_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'author_id'     => $this->Integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'text' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
