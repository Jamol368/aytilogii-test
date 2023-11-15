<?php

use yii\helpers\Html;
use yii\web\JqueryAsset;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Cource $model */
/** @var bool $state */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
//$this->registerJsFile('@web/js/my-script.js', ['depends' => JqueryAsset::class]);
?>
<div class="cource-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Html::encode($model->description) ?></p>

    <iframe width="560" height="315" src="<?= $model->url?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <?php if(!$state):?>
    <div class="completed">
        <button id="complete" class="btn btn-success">Complete</button>
    </div>
    <div class="container mt-4 next d-none">Next course: <a href="/">New courses</a></div>
    <?php else:?>
    <div class="container mt-4"><a href="/">All courses</a></div>
    <?php endif;?>

</div>

<?php
$ajaxUrl = \yii\helpers\Url::to(['cource/complete']);
$js = <<<JS
$('#complete').on('click', function() {
    $.ajax({
        url: '{$ajaxUrl}',
        type: 'GET',
        data: {param1: '$model->id'},
        dataType: 'json',
        success: function(data) {
            $('#complete').addClass('disabled');
            $('.next').removeClass('d-none');
            console.log(data);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
});
JS;
$this->registerJs($js);
?>
