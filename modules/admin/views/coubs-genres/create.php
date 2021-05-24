<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CoubsGenres */

$this->title = 'Create Coubs Genres';
$this->params['breadcrumbs'][] = ['label' => 'Coubs Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coubs-genres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
