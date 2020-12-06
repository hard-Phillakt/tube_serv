<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\FilmsImgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Films Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-img-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Films Img', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'alt',
            'img',
            //'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
