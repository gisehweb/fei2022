<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%permiso}}`.
 */
class m220413_192452_create_permiso_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%permiso}}', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(100),
            'is_staff' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%permiso}}');
    }
}
