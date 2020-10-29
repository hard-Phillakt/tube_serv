<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ImageGallery */
/* @var $form yii\widgets\ActiveForm */

use app\modules\admin\models\Film;

$filmData = new Film();

$getFilmTitle = $filmData::find()->asArray()->all();

$resultFilmTitle = ArrayHelper::map($getFilmTitle, 'id', 'title');

?>

<div class="image-gallery-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'alt')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-6">
            <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'parent_id')->dropDownList($resultFilmTitle) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
