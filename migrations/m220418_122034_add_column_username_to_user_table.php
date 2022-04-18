<?php

use yii\db\Migration;

/**
 * Class m220418_122034_add_column_username_to_user_table
 */
class m220418_122034_add_column_username_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("user", "username", $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220418_122034_add_column_username_to_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220418_122034_add_column_username_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
