<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id
 * @property string|null $kelompok
 * @property string|null $materi
 * @property string|null $sesi
 * @property string|null $tanggal
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['kelompok', 'materi', 'sesi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kelompok' => 'Kelompok',
            'materi' => 'Materi',
            'sesi' => 'Sesi',
            'tanggal' => 'Tanggal',
        ];
    }
}
