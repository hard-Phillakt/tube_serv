<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<!--

*** ФИЛЬМЫ ***
^films T M // Фильмы
^films_genres T M // Жанры фильмов
^films_to_genres T M // Связь жанры к фильмам
^films_gallery T M // Галереи к Фильмам
^films_img T M // Картинки к фильмам
^films_gallery_to_films_img T M // Связь галереи к картинкам
^films_to_films_gallery T M // Связь Фильмов с галереями



*** СЕРИАЛЫ ***
serials // Сериалы
serials_to_genre // Жанры к сериалам
serials_to_serials_gallery // Сериалы к галереям
serials_gallery_to_serials_img // Галереи сериалы  к картинкам


*** АНИМЕ ***
anime // Аниме
anime_to_genre // Жанры к Аниме
anime_to_anime_gallery // Аниме к галереям
anime_gallery_to_anime_img // Галереи сериалы  к картинкам

-->


<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Admin-panel',
        'brandUrl' => '/admin/',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [
                'label' => 'Раздел: Фильмы',
                'items' => [
                    '<li class="dropdown-header">Список фильмов</li>',
                    ['label' => 'Фильмы', 'url' => '/admin/films/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Жанры</li>',
                    ['label' => 'Жанры', 'url' => '/admin/films-genres/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Галереи</li>',
                    ['label' => 'Галереи', 'url' => '/admin/films-gallery/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Картинки</li>',
                    ['label' => 'Картинки', 'url' => '/admin/films-img/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь галереи с картинками</li>',
                    ['label' => 'Связь галереи с картинками', 'url' => '/admin/films-gallery-to-films-img/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь фильмы с галереями</li>',
                    ['label' => 'Связь фильмы с галереями', 'url' => '/admin/films-to-films-gallery/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь жанры с фильмами</li>',
                    ['label' => 'Связь жанры с фильмами', 'url' => '/admin/films-to-genres/'],
                ],
            ],

            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->name . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

