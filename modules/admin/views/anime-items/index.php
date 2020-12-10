<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AnimeItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anime Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anime-items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Anime Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'original_title',
            'slug',
            'description',
            //'content:ntext',
            //'keywords',
            //'original_url_video:ntext',
            //'proxy_url_video:ntext',
            //'poster_img:ntext',
            //'year',
            //'publish_date',
            //'tagline',
            //'producer',
            //'views:ntext',
            //'world_premiere',
            //'release_date_in_russia',
            //'duration',
            //'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
