<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contrato;

/**
 * ContratoSearch represents the model behind the search form of `app\models\Contrato`.
 */
class ContratoSearch extends Contrato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idCliente', 'idProveedor', 'idNaviera', 'idFormaPago', 'idFormaEmbarque', 'comision_porcentaje', 'comision_metrocubico', 'visible_comision', 'idPuertoOrigen', 'idPuertoDestino'], 'integer'],
            [['fecha', 'orden_cliente', 'fecha_requerido', 'marca_paquete', 'contacto_naviera', 'nota_interna', 'nota_externa'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Contrato::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'idCliente' => $this->idCliente,
            'idProveedor' => $this->idProveedor,
            'fecha' => $this->fecha,
            'fecha_requerido' => $this->fecha_requerido,
            'idNaviera' => $this->idNaviera,
            'idFormaPago' => $this->idFormaPago,
            'idFormaEmbarque' => $this->idFormaEmbarque,
            'comision_porcentaje' => $this->comision_porcentaje,
            'comision_metrocubico' => $this->comision_metrocubico,
            'visible_comision' => $this->visible_comision,
            'idPuertoOrigen' => $this->idPuertoOrigen,
            'idPuertoDestino' => $this->idPuertoDestino,
        ]);

        $query->andFilterWhere(['like', 'orden_cliente', $this->orden_cliente])
            ->andFilterWhere(['like', 'marca_paquete', $this->marca_paquete])
            ->andFilterWhere(['like', 'contacto_naviera', $this->contacto_naviera])
            ->andFilterWhere(['like', 'nota_interna', $this->nota_interna])
            ->andFilterWhere(['like', 'nota_externa', $this->nota_externa]);

        return $dataProvider;
    }
}
