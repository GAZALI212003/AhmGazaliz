<?php

use yii\db\Migration;

/**
 * Class m230524_081535_create_jadwal
 */
class m230524_081535_create_jadwal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('jadwal', array(
            'id' => 'pk',
            'kelompok' => 'string',
            'materi' => 'string',
            'sesi' => 'string',
            'tanggal' => 'datetime',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230524_081535_create_jadwal cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230524_081535_create_jadwal cannot be reverted.\n";

        return false;
    }
    */
}
