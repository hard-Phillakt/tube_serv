<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnimeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anime-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'original_title') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'original_url_video') ?>

    <?php // echo $form->field($model, 'proxy_url_video') ?>

    <?php // echo $form->field($model, 'poster_img') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'publish_date') ?>

    <?php // echo $form->field($model, 'tagline') ?>

    <?php // echo $form->field($model, 'producer') ?>

    <?php // echo $form->field($model, 'views') ?>

    <?php // echo $form->field($model, 'world_premiere') ?>

    <?php // echo $form->field($model, 'release_date_in_russia') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'parent_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
