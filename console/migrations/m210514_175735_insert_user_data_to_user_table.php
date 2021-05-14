<?php

use yii\db\Migration;

/**
 * Class m210514_175735_insert_user_data_to_user_table
 */
class m210514_175735_insert_user_data_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user',[
            'id' => '1',
            'username' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('admin12345'),
            'email' => 'admin@gmail.com',
            'status' => 10,
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user', ['id' => 1]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210514_175735_insert_user_data_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
