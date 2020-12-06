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
^films // Фильмы
^films_genres // Жанры фильмов
^films_to_genres // Связь жанры к фильмам

^films_gallery // Фильмы к галереям
^films_img // Картинки к фильмам
^films_gallery_to_films_img // Связь галереи к картинкам

^films_to_films_gallery // Связь фильмов к галереи



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
                    ['label' => 'Фильмы', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список жанров к фильмам</li>',
                    ['label' => 'Жанры', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список категории к жанрам</li>',
                    ['label' => 'Категории', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список картинок к фильмам</li>',
                    ['label' => 'Галерея', 'url' => '/admin/film/'],
                ],
            ],
            [
                'label' => 'Раздел: Сериалы',
                'items' => [
                    '<li class="dropdown-header">Список сериалы</li>',
                    ['label' => 'Сериалы', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список жанров к сериалы</li>',
                    ['label' => 'Жанры', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список категории к жанрам</li>',
                    ['label' => 'Категории', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список картинок к сериалам</li>',
                    ['label' => 'Галерея', 'url' => '/admin/film/'],
                ],
            ],
            [
                'label' => 'Раздел: Аниме',
                'items' => [
                    '<li class="dropdown-header">Список сериалы</li>',
                    ['label' => 'Аниме', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список жанров к сериалы</li>',
                    ['label' => 'Жанры', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список категории к жанрам</li>',
                    ['label' => 'Категории', 'url' => '/admin/film/'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Список картинок к сериалам</li>',
                    ['label' => 'Галерея', 'url' => '/admin/film/'],
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


<!--echo Nav::widget([-->
<!--'options' => ['class' => 'navbar-nav navbar-right'],-->
<!--'items' => [-->
<!--[-->
<!--'label' => 'Фильмы',-->
<!--'items' => [-->
<!--['label' => 'Фильмы', 'url' => '/admin/film/'],-->
<!--['label' => 'Жанры', 'url' => '/admin/film/'],-->
<!--['label' => 'Категории', 'url' => '/admin/film/'],-->
<!--['label' => 'Галерея', 'url' => '/admin/film/'],-->
<!--'<li class="divider"></li>',-->
<!--'<li class="dropdown-header">Dropdown Header</li>',-->
<!--['label' => 'Level 1 - Dropdown B', 'url' => '#'],-->
<!--],-->
<!--],-->
<!--['label' => 'Категории', 'url' => '/admin/cat/'],-->
<!--['label' => 'Жанры', 'url' => '/admin/genre/'],-->
<!--['label' => 'Категории к жанрам', 'url' => '/admin/cat-to-genre/'],-->
<!--['label' => 'Галерея', 'url' => '/admin/image-gallery/'],-->
<!--Yii::$app->user->isGuest ? (-->
<!--['label' => 'Login', 'url' => ['/site/login']]-->
<!--) : (-->
<!--'<li>'-->
<!--    . Html::beginForm(['/site/logout'], 'post')-->
<!--    . Html::submitButton(-->
<!--    'Logout (' . Yii::$app->user->identity->name . ')',-->
<!--    ['class' => 'btn btn-link logout']-->
<!--    )-->
<!--    . Html::endForm()-->
<!--    . '</li>'-->
<!--)-->
<!--],-->
<!--]);-->
