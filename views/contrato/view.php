<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contrato */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contratos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contrato-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'idCliente',
            'idProveedor',
            'fecha',
            'orden_cliente',
            'fecha_requerido',
            'marca_paquete',
            'idNaviera',
            'contacto_naviera',
            'idFormaPago',
            'idFormaEmbarque',
            'comision_porcentaje',
            'comision_metrocubico',
            'visible_comision',
            'nota_interna:ntext',
            'nota_externa:ntext',
            'idPuertoOrigen',
            'idPuertoDestino',
        ],
    ]) ?>

</div>
