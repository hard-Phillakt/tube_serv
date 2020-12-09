<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Anime */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Animes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="anime-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'original_title',
            'slug',
            'description',
            'content:ntext',
            'keywords',
            'original_url_video:ntext',
            'proxy_url_video:ntext',
            'poster_img:ntext',
            'year',
            'publish_date',
            'tagline',
            'producer',
            'views:ntext',
            'world_premiere',
            'release_date_in_russia',
            'duration',
            'parent_id',
        ],
    ]) ?>

</div>
