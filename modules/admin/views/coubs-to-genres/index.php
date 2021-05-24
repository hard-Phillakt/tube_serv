<?php

use app\modules\admin\models\Coubs;
use app\modules\admin\models\CoubsGenres;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CoubsToGenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coubs To Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coubs-to-genres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coubs To Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'films_id',
                'value' => function ($data) {
                    $filmsId = $data['coubs_id'];
                    $films = Coubs::findOne($filmsId);
                    return $films['title'];
                },
            ],
            [
                'attribute' => 'genres_id',
                'value' => function ($data) {
                    $genresId = $data['genres_id'];
                    $genres = CoubsGenres::findOne($genresId);
                    return $genres['title'];
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]); ?>


</div>
