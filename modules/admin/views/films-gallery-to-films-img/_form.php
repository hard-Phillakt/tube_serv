<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilmsGalleryToFilmsImg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-gallery-to-films-img-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'films_gallery_id')->textInput() ?>

    <?= $form->field($model, 'films_img_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
