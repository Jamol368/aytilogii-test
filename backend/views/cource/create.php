<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Cource $model */

$this->title = 'Create Cource';
$this->params['breadcrumbs'][] = ['label' => 'Cources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cource-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
