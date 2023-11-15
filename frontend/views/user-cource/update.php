<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserCource $model */

$this->title = 'Update User Cource: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Cources', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-cource-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
