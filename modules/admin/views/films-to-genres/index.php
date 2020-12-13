<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\modules\admin\models\Films;
use app\modules\admin\models\FilmsGenres;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\FilmsToGenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Films To Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-to-genres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Films To Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'films_id',
                'value' => function ($data) {
                    $filmsId = $data['films_id'];
                    $films = Films::findOne($filmsId);
                    return $films['title'];
                },
            ],
            [
                'attribute' => 'genres_id',
                'value' => function ($data) {
                    $genresId = $data['genres_id'];
                    $genres = FilmsGenres::findOne($genresId);
                    return $genres['title'];
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]); ?>


</div>
