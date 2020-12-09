<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SerialsGalleryToSerialsImg */

$this->title = 'Create Serials Gallery To Serials Img';
$this->params['breadcrumbs'][] = ['label' => 'Serials Gallery To Serials Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serials-gallery-to-serials-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
