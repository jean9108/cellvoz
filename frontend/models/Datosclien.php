<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datosclien".
 *
 * @property int $idcliente
 * @property int $edad
 * @property string $area
 * @property int $saldo
 */
class Datosclien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datosclien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['edad', 'area', 'saldo'], 'required'],
            [['edad', 'saldo'], 'integer'],
            [['area'], 'string', 'max' => 95],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcliente' => 'Idcliente',
            'edad' => 'Edad',
            'area' => 'Area',
            'saldo' => 'Saldo',
        ];
    }
}
