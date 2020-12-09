<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SerialsGalleryToSerialsImgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serials Gallery To Serials Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serials-gallery-to-serials-img-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Serials Gallery To Serials Img', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'films_gallery_id',
            'films_img_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
