<?php

use yii\db\Migration;

/**
 * Class m220413_181402_crear_table_usuarios
 */
class m220413_181402_crear_table_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220413_181402_crear_table_usuarios cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220413_181402_crear_table_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
