<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserCource $model */

$this->title = 'Create User Cource';
$this->params['breadcrumbs'][] = ['label' => 'User Cources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-cource-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
