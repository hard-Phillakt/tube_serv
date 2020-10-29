<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CatToGenre */

$this->title = 'Create Cat To Genre';
$this->params['breadcrumbs'][] = ['label' => 'Cat To Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-to-genre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
