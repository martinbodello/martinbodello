<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contrato".
 *
 * @property int $id
 * @property int $idCliente
 * @property int $idProveedor
 * @property string $fecha
 * @property string $orden_cliente
 * @property string $fecha_requerido
 * @property string $marca_paquete
 * @property int|null $idNaviera
 * @property string $contacto_naviera
 * @property int $idFormaPago
 * @property int $idFormaEmbarque
 * @property int|null $comision_porcentaje
 * @property int|null $comision_metrocubico
 * @property int $visible_comision
 * @property string|null $nota_interna
 * @property string|null $nota_externa
 * @property int $idPuertoOrigen
 * @property int $idPuertoDestino
 *
 * @property Cliente $idCliente0
 * @property Proveedor $idProveedor0
 */
class Contrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCliente', 'idProveedor', 'fecha', 'orden_cliente', 'fecha_requerido', 'marca_paquete', 'contacto_naviera', 'idFormaPago', 'idFormaEmbarque', 'idPuertoOrigen', 'idPuertoDestino'], 'required'],
            [['idCliente', 'idProveedor', 'idNaviera', 'idFormaPago', 'idFormaEmbarque', 'comision_porcentaje', 'comision_metrocubico', 'visible_comision', 'idPuertoOrigen', 'idPuertoDestino'], 'integer'],
            [['fecha', 'fecha_requerido'], 'safe'],
            [['nota_interna', 'nota_externa'], 'string'],
            [['orden_cliente', 'marca_paquete'], 'string', 'max' => 100],
            [['contacto_naviera'], 'string', 'max' => 1000],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'id']],
            [['idProveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedor::className(), 'targetAttribute' => ['idProveedor' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idCliente' => 'Id Cliente',
            'idProveedor' => 'Id Proveedor',
            'fecha' => 'Fecha',
            'orden_cliente' => 'Orden Cliente',
            'fecha_requerido' => 'Fecha Requerido',
            'marca_paquete' => 'Marca Paquete',
            'idNaviera' => 'Id Naviera',
            'contacto_naviera' => 'Contacto Naviera',
            'idFormaPago' => 'Id Forma Pago',
            'idFormaEmbarque' => 'Id Forma Embarque',
            'comision_porcentaje' => 'Comision Porcentaje',
            'comision_metrocubico' => 'Comision Metrocubico',
            'visible_comision' => 'Visible Comision',
            'nota_interna' => 'Nota Interna',
            'nota_externa' => 'Nota Externa',
            'idPuertoOrigen' => 'Id Puerto Origen',
            'idPuertoDestino' => 'Id Puerto Destino',
        ];
    }

    /**
     * Gets query for [[IdCliente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente0()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }

    /**
     * Gets query for [[IdProveedor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdProveedor0()
    {
        return $this->hasOne(Proveedor::className(), ['id' => 'idProveedor']);
    }
}
