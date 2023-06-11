<?php

use yii\db\Migration;

/**
 * Class m230524_081535_create_hafalan
 */
class m230526_003618_create_hafalan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('hafalan', array(
            'id' => 'pk',
            'nip_penasehat' => 'integer',
            'nim' => 'integer',
            'surah' => 'string',
            'ayat' => 'string',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230526_003618_create_hafalan cannot be reverted.\n";

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
