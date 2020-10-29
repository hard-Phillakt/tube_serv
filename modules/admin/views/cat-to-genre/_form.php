<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Cat;
use app\modules\admin\models\Genre;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CatToGenre */
/* @var $form yii\widgets\ActiveForm */



$catData = new Cat();

$getCatTitle = $catData::find()->asArray()->all();

$resultCatTitle = ArrayHelper::map($getCatTitle, 'id', 'title');


$genreData = new Genre();

$getGenreTitle = $genreData::find()->asArray()->all();

$resultGenreTitle = ArrayHelper::map($getGenreTitle, 'id', 'title');
?>

<div class="cat-to-genre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_id')->dropDownList($resultCatTitle) ?>

    <?= $form->field($model, 'genre_id')->dropDownList($resultGenreTitle) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
