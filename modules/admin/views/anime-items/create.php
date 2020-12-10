<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AnimeItems */

$this->title = 'Create Anime Items';
$this->params['breadcrumbs'][] = ['label' => 'Anime Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anime-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
