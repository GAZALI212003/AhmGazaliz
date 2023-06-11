<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa048".
 *
 * @property int $Id048
 * @property string|null $Nim048
 * @property string|null $Nama048
 * @property string|null $Kelas048
 * @property string|null $Status048
 */
class Mahasiswa048 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa048';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nim048', 'Nama048', 'Kelas048', 'Status048'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id048' => 'Id048',
            'Nim048' => 'Nim048',
            'Nama048' => 'Nama048',
            'Kelas048' => 'Kelas048',
            'Status048' => 'Status048',
        ];
    }
}
