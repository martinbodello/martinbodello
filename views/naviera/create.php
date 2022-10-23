<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Naviera */

$this->title = 'Create Naviera';
$this->params['breadcrumbs'][] = ['label' => 'Navieras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naviera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
