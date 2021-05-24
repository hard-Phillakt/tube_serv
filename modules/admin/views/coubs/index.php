<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CoubsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coubs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coubs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coubs', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'views',
            //'duration',
            //'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
