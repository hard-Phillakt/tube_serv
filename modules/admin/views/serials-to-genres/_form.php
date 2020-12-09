<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SerialsToGenres */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="serials-to-genres-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'films_id')->textInput() ?>

    <?= $form->field($model, 'genres_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
