<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%author}}`.
 */
class m191003_150017_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'user_id'     => $this->Integer()->notNull(),
            'author_name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'user_to_author',
            'author',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'author_to_book',
            'book',
            'author_id',
            'author',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%author}}');
    }
}
