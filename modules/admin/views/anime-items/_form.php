<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnimeItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anime-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'original_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'original_url_video')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proxy_url_video')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poster_img')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publish_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tagline')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'producer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'views')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'world_premiere')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'release_date_in_russia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
