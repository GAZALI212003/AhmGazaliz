<?php

use yii\db\Migration;

/**
 * Class m230524_081535_create_hafalan
 */
class m230530_135008_mahasiswa048 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mahasiswa048', array(
            'Id048' => 'pk',
            'Nim048' => 'string',
            'Nama048' => 'string',
            'Kelas048' => 'string',
            'Status048' => 'string',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_135008_mahasiswa048 cannot be reverted.\n";

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
