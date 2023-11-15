<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Cource $model */

$this->title = 'Update Cource: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Cources', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cource-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
