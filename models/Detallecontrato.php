<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detallecontrato".
 *
 * @property int $id
 * @property int $idContrato
 * @property string $codigoProducto
 * @property int $cantidad_laminas
 * @property int $espesor
 * @property int $ancho
 * @property int $largo
 * @property int $container
 * @property int $paquetes_por_container
 * @property float $preciometrocubico
 *
 * @property Producto $codigoProducto0
 */
class Detallecontrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detallecontrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idContrato', 'codigoProducto', 'cantidad_laminas', 'espesor', 'ancho', 'largo', 'container', 'paquetes_por_container', 'preciometrocubico'], 'required'],
            [['id', 'idContrato', 'cantidad_laminas', 'espesor', 'ancho', 'largo', 'container', 'paquetes_por_container'], 'integer'],
            [['preciometrocubico'], 'number'],
            [['codigoProducto'], 'string', 'max' => 100],
            [['codigoProducto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['codigoProducto' => 'codigo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idContrato' => 'Id Contrato',
            'codigoProducto' => 'Codigo Producto',
            'cantidad_laminas' => 'Cantidad Laminas',
            'espesor' => 'Espesor',
            'ancho' => 'Ancho',
            'largo' => 'Largo',
            'container' => 'Container',
            'paquetes_por_container' => 'Paquetes Por Container',
            'preciometrocubico' => 'Preciometrocubico',
        ];
    }

    /**
     * Gets query for [[CodigoProducto0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoProducto0()
    {
        return $this->hasOne(Producto::className(), ['codigo' => 'codigoProducto']);
    }
}
