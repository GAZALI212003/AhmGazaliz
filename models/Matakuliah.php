<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matakuliah".
 *
 * @property int $id
 * @property string $kode_mk
 * @property string $nama_mk
 */
class Matakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_mk', 'nama_mk'], 'required'],
            [['id'], 'integer'],
            [['kode_mk', 'nama_mk'], 'string', 'max' => 100],
            [['kode_mk'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_mk' => 'Kode Matakuliah',
            'nama_mk' => 'Nama Matakuliah',
        ];
    }
}
