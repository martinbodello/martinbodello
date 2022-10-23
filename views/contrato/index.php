<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContratoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contratos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contrato-index">

    <h1><?= Html::encode($this->title) ?> - Proximamente</h1>

    <!--<p>
        <?/*= Html::a('Create Contrato', ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idCliente',
            'idProveedor',
            'fecha',
            'orden_cliente',
            //'fecha_requerido',
            //'marca_paquete',
            //'idNaviera',
            //'contacto_naviera',
            //'idFormaPago',
            //'idFormaEmbarque',
            //'comision_porcentaje',
            //'comision_metrocubico',
            //'visible_comision',
            //'nota_interna:ntext',
            //'nota_externa:ntext',
            //'idPuertoOrigen',
            //'idPuertoDestino',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
