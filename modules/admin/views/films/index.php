<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\FilmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Films';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Films', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'name',
            'slug',
            'description',
            //'content:ntext',
            //'keywords',
            //'sourceVideo:ntext',
            //'proxyServerUrlVideo:ntext',
            //'posterImg:ntext',
            //'date',
            //'publishDate',
            //'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
