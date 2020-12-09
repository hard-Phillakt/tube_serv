<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnimeGenres */

$this->title = 'Create Anime Genres';
$this->params['breadcrumbs'][] = ['label' => 'Anime Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anime-genres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
