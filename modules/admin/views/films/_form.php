<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;
use yii\helpers\Inflector;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Films */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-12">

            <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home"
                           aria-expanded="true">Описание</a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"
                           aria-expanded="false">Ссылки</a>
                    </li>
                    <li role="presentation">
                        <a href="#date" role="tab" id="date-tab" data-toggle="tab" aria-controls="date"
                           aria-expanded="false">Даты</a>
                    </li>
                </ul>

                <br>

                <div class="tab-content" id="myTabContent">

                    <!-- 1 -->
                    <div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-6">

                                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'original_title')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

                                <?php
                                echo $form->field($model, 'poster_img')->widget(InputFile::className(), [
                                    'language' => 'ru',
                                    'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                                    'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                                    'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                                    'options' => ['class' => 'form-control'],
                                    'buttonOptions' => ['class' => 'btn btn-default'],
                                    'multiple' => false       // возможность выбора нескольких файлов
                                ]);
                                ?>

                            </div>

                            <div class="col-lg-6">

                                <?= $form->field($model, 'producer')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'parent_id')->textInput() ?>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <?= $form->field($model, 'description')->widget(CKEditor::class, [
                                    'editorOptions' => [
                                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                                        'inline' => false, //по умолчанию false
                                    ],
                                ]); ?>

                                <?= $form->field($model, 'content')->widget(CKEditor::class, [
                                    'editorOptions' => [
                                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                                        'inline' => false, //по умолчанию false
                                    ],
                                ]); ?>
                            </div>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'keywords')->widget(CKEditor::class, [
                                    'editorOptions' => [
                                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                                        'inline' => false, //по умолчанию false
                                    ],
                                ]); ?>

                                <?= $form->field($model, 'tagline')->widget(CKEditor::class, [
                                    'editorOptions' => [
                                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                                        'inline' => false, //по умолчанию false
                                    ],
                                ]); ?>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">

                        <div class="col-lg-6">
                            <?= $form->field($model, 'proxy_url_video')->textarea(['rows' => 6]) ?>
                        </div>

                        <div class="col-lg-6">
                            <?= $form->field($model, 'original_url_video')->textarea(['rows' => 6]) ?>
                        </div>

                        <!-- Просмотры видео пользователями -->
                        <?= $form->field($model, 'views')->hiddenInput()->label('') ?>

                    </div>

                    <!-- 3 -->
                    <div class="tab-pane fade" role="tabpanel" id="date" aria-labelledby="date-tab">

                        <div class="row">
                            <div class="col-lg-6">

                                <?php
                                echo '<label>Дата загрузки видео на сервер</label>';
                                echo DatePicker::widget([
                                    'name' => 'publish_date',
                                    'language' => 'ru',
                                    'model' => $model,
                                    'attribute' => 'publish_date',
                                    'value' => date('d-M-Y', strtotime('+2 days')),
                                    'options' => ['placeholder' => 'Дата загрузки видео на сервер ...'],
                                    'pluginOptions' => [
                                        'format' => 'dd-M-yyyy',
                                        'todayHighlight' => true,
                                    ]
                                ]);
                                ?>
                                <br>

                                <?php
                                echo '<label>Год выхода фильма</label>';
                                echo DatePicker::widget([
                                    'name' => 'year',
                                    'language' => 'ru',
                                    'model' => $model,
                                    'attribute' => 'year',
                                    'value' => date('d-M-Y', strtotime('+2 days')),
                                    'options' => ['placeholder' => 'Год выхода фильма ...'],
                                    'pluginOptions' => [
                                        'format' => 'dd-M-yyyy',
                                        'todayHighlight' => true,
                                    ]
                                ]);
                                ?>
                                <br>
                            </div>

                            <div class="col-lg-6">

                                <?php
                                echo '<label>Премьера в мире</label>';
                                echo DatePicker::widget([
                                    'name' => 'world_premiere',
                                    'language' => 'ru',
                                    'model' => $model,
                                    'attribute' => 'world_premiere',
                                    'value' => date('d-M-Y', strtotime('+2 days')),
                                    'options' => ['placeholder' => 'Премьера в мире ...'],
                                    'pluginOptions' => [
                                        'format' => 'dd-M-yyyy',
                                        'todayHighlight' => true,
                                    ]
                                ]);
                                ?>
                                <br>

                                <?php
                                echo '<label>Дата выхода в России</label>';
                                echo DatePicker::widget([
                                    'name' => 'release_date_in_russia',
                                    'language' => 'ru',
                                    'model' => $model,
                                    'attribute' => 'release_date_in_russia',
                                    'value' => date('d-M-Y', strtotime('+2 days')),
                                    'options' => ['placeholder' => 'Дата выхода в России ...'],
                                    'pluginOptions' => [
                                        'format' => 'dd-M-yyyy',
                                        'todayHighlight' => true,
                                    ]
                                ]);
                                ?>
                                <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>