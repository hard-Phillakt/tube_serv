<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\modules\admin\models\Films;
use app\modules\admin\models\FilmsGenres;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilmsToGenresSearch */
/* @var $form yii\widgets\ActiveForm */


$films = new Films();
$getFilmsTitle = $films::find()->asArray()->all();

$resultFilmsTitle = ArrayHelper::map($getFilmsTitle, 'id', 'title');
// Добавляем сброс фильтра
$resultFilmsTitle[''] = 'Clear';


$filmsGenres = new FilmsGenres();
$getFilmsGenresTitle = $filmsGenres::find()->asArray()->all();
$resultFilmsGenresTitle = ArrayHelper::map($getFilmsGenresTitle, 'id', 'title');

?>

<div class="films-to-genres-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<!--    --><?//= $form->field($model, 'id') ?>

    <?= $form->field($model, 'films_id')->dropDownList($resultFilmsTitle) ?>

<!--    --><?//= $form->field($model, 'genres_id')->dropDownList($resultFilmsGenresTitle) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
