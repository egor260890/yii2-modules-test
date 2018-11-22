<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notifications`.
 */
class m181121_205337_create_notifications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('notifications', [
            'id' => $this->primaryKey(),
            'task_id'=>$this->integer(),
            'created_date'=>$this->integer(),
        ],$tableOptions);

        $this->createIndex('{{%idx-notifications-task_id}}', '{{%notifications}}', 'task_id');
        $this->addForeignKey('{{%fk-notifications-task_id}}', '{{%notifications}}', 'task_id', '{{%tasks}}', 'id', 'CASCADE', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('notifications');
    }
}
