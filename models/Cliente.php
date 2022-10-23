<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $nombre
 * @property string $direccion
 * @property string $ciudad
 * @property string $provincia
 * @property string $pais
 * @property int $cp
 * @property string|null $telefono
 * @property string|null $fax
 * @property string|null $email
 *
 * @property Contrato[] $contratos
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'direccion', 'ciudad', 'provincia', 'pais', 'cp'], 'required'],
            [['cp'], 'integer'],
            [['nombre'], 'string', 'max' => 500],
            [['direccion', 'ciudad'], 'string', 'max' => 1000],
            [['provincia'], 'string', 'max' => 10],
            [['pais'], 'string', 'max' => 2],
            [['telefono', 'fax'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'ciudad' => 'Ciudad',
            'provincia' => 'Provincia',
            'pais' => 'Pais',
            'cp' => 'Cp',
            'telefono' => 'Telefono',
            'fax' => 'Fax',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Contratos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContratos()
    {
        return $this->hasMany(Contrato::className(), ['idCliente' => 'id']);
    }
}
