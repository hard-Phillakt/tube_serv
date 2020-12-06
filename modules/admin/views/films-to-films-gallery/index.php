<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\FilmsToFilmsGallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Films To Films Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-to-films-gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Films To Films Gallery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'films_id',
            'films_gallery_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
