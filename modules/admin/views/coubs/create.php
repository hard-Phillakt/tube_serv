<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Coubs */

$this->title = 'Create Coubs';
$this->params['breadcrumbs'][] = ['label' => 'Coubs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coubs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
