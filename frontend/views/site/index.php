<?php

/** @var yii\web\View $this */
/** @var \frontend\models\Cource $model */
/** @var bool|mixed $state */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">Cources!</h1>
            <p class="fs-5 fw-light">A lot of cources are here!</p>
        </div>
    </div>

    <?php if ($state):?>
    <p class="text-success">Cource completed!</p>
    <?php endif;?>
    <div class="body-content">
        <?php foreach ($model as $item):?>
        <div class="border rounded p-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span class="btn btn-link"><?= $item->title?></span>
                    <?php
                    echo Html::a('Enter', ['cource/view', 'id' => $item->id], ['class' => 'btn btn-primary']);
                    ?>
                </div>
                <?php
                if ($item->getUserCource())
                    echo '<p class="text-end text-success">&#10003;</p>';
                ?>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>
