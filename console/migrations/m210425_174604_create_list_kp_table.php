<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%list_kp}}`.
 */
class m210425_174604_create_list_kp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%list_kp}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull(),
            'address' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'contact' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%list_kp}}');
    }
}
