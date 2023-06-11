<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hafalan".
 *
 * @property int $id
 * @property int|null $nip penasehat
 * @property int|null $nim
 * @property string|null $surah
 * @property string|null $ayat
 */
class Hafalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hafalan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_penasehat', 'nim'], 'integer'],
            [['surah', 'ayat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip_penasehat' => 'Nip Penasehat',
            'nim' => 'Nim',
            'surah' => 'Surah',
            'ayat' => 'Ayat',
        ];
    }
}
