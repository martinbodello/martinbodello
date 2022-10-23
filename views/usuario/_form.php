<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */

$model->password = '';

$this->registerJs("jQuery('#reveal-password').change(function(){jQuery('#usuario-password').attr('type',this.checked?'text':'password');})");
$this->registerJsFile(Yii::$app->homeUrl . 'js/custom.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <div class="form-group field-usuario-tipo">
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= Html::checkbox('reveal-password', false, ['id' => 'reveal-password']) ?> <?= Html::label('Show password', 'reveal-password') ?>

            </div>
            <div class="form-group field-usuario-tipo">
                <?php
                $tipos = ['administrador' => 'Administrador',
                    'asistente' => 'Asistente',
                    'cliente' => 'Cliente',
                    'proveedor' => 'Proveedor'];
                echo $form->field($model, 'tipo')->widget(Select2::classname(), [
                    'data' => $tipos,
                    'language' => 'es',
                    'options' => ['placeholder' => 'Seleccionar tipo'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>
            </div>
            <div id="cliente" class="form-group field-usuario-tipo">
                <label class="control-label" for="usuario-idreferencia">Cliente</label>
                <?php
                $tipos = \yii\helpers\ArrayHelper::map(\app\models\Cliente::find()->all(), 'id', 'nombre');

                echo Select2::widget([
                    'name' => 'idReferenciaCliente',
                    'data' => $tipos,
                    'value' => $model->idReferencia,
                    'options' => [
                        'placeholder' => 'Seleccionar Cliente',
                    ],
                ]);
                ?>
            </div>
            <div id="proveedor" class="form-group field-usuario-tipo">
                <label class="control-label" for="usuario-idreferencia">Proveedor</label>
                <?php
                $tipos = \yii\helpers\ArrayHelper::map(\app\models\Proveedor::find()->all(), 'id', 'nombre');
                echo Select2::widget([
                    'name' => 'idReferenciaProveedor',
                    'data' => $tipos,
                    'value' => $model->idReferencia,
                    'options' => [
                        'placeholder' => 'Seleccionar Cliente',
                    ],
                ]);
                ?>
            </div>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>