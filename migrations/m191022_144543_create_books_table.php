<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m191022_144543_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text()->notNull(),
            'genre' => $this->text()->notNull(),
            'author' => $this->text()->notNull(),
            'pub_date' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
