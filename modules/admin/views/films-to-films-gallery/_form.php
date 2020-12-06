<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilmsToFilmsGallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-to-films-gallery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'films_id')->textInput() ?>

    <?= $form->field($model, 'films_gallery_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
