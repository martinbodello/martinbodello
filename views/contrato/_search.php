<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContratoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contrato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idCliente') ?>

    <?= $form->field($model, 'idProveedor') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'orden_cliente') ?>

    <?php // echo $form->field($model, 'fecha_requerido') ?>

    <?php // echo $form->field($model, 'marca_paquete') ?>

    <?php // echo $form->field($model, 'idNaviera') ?>

    <?php // echo $form->field($model, 'contacto_naviera') ?>

    <?php // echo $form->field($model, 'idFormaPago') ?>

    <?php // echo $form->field($model, 'idFormaEmbarque') ?>

    <?php // echo $form->field($model, 'comision_porcentaje') ?>

    <?php // echo $form->field($model, 'comision_metrocubico') ?>

    <?php // echo $form->field($model, 'visible_comision') ?>

    <?php // echo $form->field($model, 'nota_interna') ?>

    <?php // echo $form->field($model, 'nota_externa') ?>

    <?php // echo $form->field($model, 'idPuertoOrigen') ?>

    <?php // echo $form->field($model, 'idPuertoDestino') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
