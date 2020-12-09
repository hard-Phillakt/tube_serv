<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnimeGalleryToAnimeImg */

$this->title = 'Create Anime Gallery To Anime Img';
$this->params['breadcrumbs'][] = ['label' => 'Anime Gallery To Anime Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anime-gallery-to-anime-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
