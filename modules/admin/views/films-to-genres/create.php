<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilmsToGenres */

$this->title = 'Create Films To Genres';
$this->params['breadcrumbs'][] = ['label' => 'Films To Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-to-genres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
