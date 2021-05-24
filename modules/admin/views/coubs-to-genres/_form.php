<?php

use app\modules\admin\models\Coubs;
use app\modules\admin\models\CoubsGenres;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CoubsToGenres */
/* @var $form yii\widgets\ActiveForm */


$coubs = new Coubs();
$getCoubsTitle = $coubs::find()->asArray()->all();
$resultCoubsTitle = ArrayHelper::map($getCoubsTitle, 'id', 'title');


$coubsGenres = new CoubsGenres();
$getCoubsGenresTitle = $coubsGenres::find()->asArray()->all();
$resultCoubsGenresTitle = ArrayHelper::map($getCoubsGenresTitle, 'id', 'title');


?>

<div class="coubs-to-genres-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'coubs_id')->dropDownList($resultCoubsTitle) ?>

    <?= $form->field($model, 'genres_id')->dropDownList($resultCoubsGenresTitle) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
