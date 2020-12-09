<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SerialsToGenres */

$this->title = 'Create Serials To Genres';
$this->params['breadcrumbs'][] = ['label' => 'Serials To Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serials-to-genres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
