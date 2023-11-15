<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_cources}}`.
 */
class m231113_073221_create_user_cources_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_cources}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'cource_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-user_cources-user_id',
            'user_cources',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-user_cources-cource_id',
            'user_cources',
            'cource_id',
            'cources',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-user_cources-user_id',
            'user_cources'
        );

        $this->dropForeignKey(
            'fk-user_cources-cource_id',
            'user_cources'
        );

        $this->dropTable('{{%user_cources}}');
    }
}
