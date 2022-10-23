<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property string $codigo
 * @property string $descripcion
 * @property string|null $calidad
 * @property string|null $madera
 * @property string|null $tipo
 * @property string|null $pegamento
 *
 * @property Detallecontrato[] $detallecontratos
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['codigo'], 'string', 'max' => 100],
            [['calidad', 'madera', 'tipo', 'pegamento'], 'string', 'max' => 500],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'calidad' => 'Calidad',
            'madera' => 'Madera',
            'tipo' => 'Tipo',
            'pegamento' => 'Pegamento',
        ];
    }

    /**
     * Gets query for [[Detallecontratos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallecontratos()
    {
        return $this->hasMany(Detallecontrato::className(), ['codigoProducto' => 'codigo']);
    }
}
