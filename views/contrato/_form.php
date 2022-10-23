<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contrato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contrato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCliente')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Cliente::find()->all(), 'id', 'nombre'), ['prompt' => 'Seleccione Uno']); ?>

    <?= $form->field($model, 'idProveedor')->textInput() ?>

    <?= $form->field($model, 'fecha')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'orden_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_requerido')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'marca_paquete')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idNaviera')->textInput() ?>

    <?= $form->field($model, 'contacto_naviera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idFormaPago')->textInput() ?>

    <?= $form->field($model, 'idFormaEmbarque')->textInput() ?>

    <?= $form->field($model, 'comision_porcentaje')->textInput() ?>

    <?= $form->field($model, 'comision_metrocubico')->textInput() ?>

    <?= $form->field($model, 'visible_comision')->textInput() ?>

    <?= $form->field($model, 'nota_interna')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nota_externa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idPuertoOrigen')->textInput() ?>

    <?= $form->field($model, 'idPuertoDestino')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
