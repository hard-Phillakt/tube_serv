<?php

use app\modules\admin\models\Coubs;
use app\modules\admin\models\CoubsGenres;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CoubsToGenresSearch */
/* @var $form yii\widgets\ActiveForm */

$films = new Coubs();
$getFilmsTitle = $films::find()->asArray()->all();

$resultFilmsTitle = ArrayHelper::map($getFilmsTitle, 'id', 'title');
// Добавляем сброс фильтра
$resultFilmsTitle[''] = 'Clear';


$filmsGenres = new CoubsGenres();
$getFilmsGenresTitle = $filmsGenres::find()->asArray()->all();
$resultFilmsGenresTitle = ArrayHelper::map($getFilmsGenresTitle, 'id', 'title');
?>

<div class="coubs-to-genres-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!--    --><?//= $form->field($model, 'id') ?>

    <?= $form->field($model, 'coubs_id')->dropDownList($resultFilmsTitle) ?>

    <!--    --><?//= $form->field($model, 'genres_id')->dropDownList($resultFilmsGenresTitle) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>