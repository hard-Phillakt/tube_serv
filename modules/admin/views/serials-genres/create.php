<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SerialsGenres */

$this->title = 'Create Serials Genres';
$this->params['breadcrumbs'][] = ['label' => 'Serials Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serials-genres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
