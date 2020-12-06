<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilmsGalleryToFilmsImg */

$this->title = 'Create Films Gallery To Films Img';
$this->params['breadcrumbs'][] = ['label' => 'Films Gallery To Films Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-gallery-to-films-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
