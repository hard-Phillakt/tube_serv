<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Films;
use app\modules\admin\models\FilmsGenres;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilmsToGenres */
/* @var $form yii\widgets\ActiveForm */


$films = new Films();
$getFilmsTitle = $films::find()->asArray()->all();
$resultFilmsTitle = ArrayHelper::map($getFilmsTitle, 'id', 'title');


$filmsGenres = new FilmsGenres();
$getFilmsGenresTitle = $filmsGenres::find()->asArray()->all();
$resultFilmsGenresTitle = ArrayHelper::map($getFilmsGenresTitle, 'id', 'title');
?>

<div class="films-to-genres-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'films_id')->dropDownList($resultFilmsTitle) ?>

    <?= $form->field($model, 'genres_id')->dropDownList($resultFilmsGenresTitle) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
