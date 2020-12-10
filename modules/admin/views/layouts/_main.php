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
            [
                'label' => 'Раздел: сериалы',
                'items' => [
                    '<li class="dropdown-header">Список сериалов</li>',
                    ['label' => 'Сериалы', 'url' => '/admin/serials/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Серии к сериалам</li>',
                    ['label' => 'Серии к сериалам', 'url' => '/admin/serials-items/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Жанры</li>',
                    ['label' => 'Жанры', 'url' => '/admin/serials-genres/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Галереи</li>',
                    ['label' => 'Галереи', 'url' => '/admin/serials-gallery/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Картинки</li>',
                    ['label' => 'Картинки', 'url' => '/admin/serials-img/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь галереи с картинками</li>',
                    ['label' => 'Связь галереи с картинками', 'url' => '/admin/serials-gallery-to-serials-img/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь сериалы с галереями</li>',
                    ['label' => 'Связь сериалы с галереями', 'url' => '/admin/serials-to-serials-gallery/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь жанры с сериалами</li>',
                    ['label' => 'Связь жанры с сериалами', 'url' => '/admin/serials-to-genres/'],
                ],
            ],
            [
                'label' => 'Раздел: аниме',
                'items' => [
                    '<li class="dropdown-header">Список аниме</li>',
                    ['label' => 'Аниме', 'url' => '/admin/anime/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Серии к аниме</li>',
                    ['label' => 'Серии к аниме', 'url' => '/admin/anime-items/'],
                    '<li class="dropdown-header">Жанры</li>',
                    ['label' => 'Жанры', 'url' => '/admin/anime-genres/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Галереи</li>',
                    ['label' => 'Галереи', 'url' => '/admin/anime-gallery/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Картинки</li>',
                    ['label' => 'Картинки', 'url' => '/admin/anime-img/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь галереи с картинками</li>',
                    ['label' => 'Связь галереи с картинками', 'url' => '/admin/anime-gallery-to-anime-img/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь аниме с галереями</li>',
                    ['label' => 'Связь аниме с галереями', 'url' => '/admin/anime-to-anime-gallery/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Связь жанры с аниме</li>',
                    ['label' => 'Связь жанры с аниме', 'url' => '/admin/anime-to-genres/'],
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

