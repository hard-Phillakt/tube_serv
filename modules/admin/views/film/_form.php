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

use app\modules\admin\models\Cat;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */

/* @var $form yii\widgets\ActiveForm */

$catData = new Cat();
$getCatTitle = $catData::find()->asArray()->all();
$resultCatTitle = ArrayHelper::map($getCatTitle, 'id', 'title');

?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-12">

            <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Описание</a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Ссылки</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-6">

                                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

                            </div>

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

                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                        <div class="col-lg-6">
                            <?= $form->field($model, 'sourceVideo')->textarea(['rows' => 6]) ?>

                            <?= $form->field($model, 'proxyServerUrlVideo')->textarea(['rows' => 6]) ?>

                            <?php
                            echo $form->field($model, 'posterImg')->widget(InputFile::className(), [
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

                            <?= $form->field($model, 'parent_id')->dropDownList($resultCatTitle) ?>

                            <div class="form-group">
                                <?php
                                    echo '<label>Дата создания видео</label>';
                                    echo DatePicker::widget([
                                        'name' => 'check_issue_date',
                                        'language' => 'ru',
                                        'model' => $model,
                                        'attribute' => 'date',
                                        'value' => date('d-M-Y', strtotime('+2 days')),
                                        'options' => ['placeholder' => 'Select issue date ...'],
                                        'pluginOptions' => [
                                            'format' => 'dd-M-yyyy',
                                            'todayHighlight' => true,
                                        ]
                                    ]);
                                ?>
                            </div>

                            <div class="form-group">
                                <?php

                                    echo '<label>Дата публикации видео на сайте</label>';
                                    echo DatePicker::widget([
                                        'name' => 'check_issue_date_2',
                                        'language' => 'ru',
                                        'model' => $model,
                                        'attribute' => 'publishDate',
                                        'value' => date('d-M-Y', strtotime('+2 days')),
                                        'options' => ['placeholder' => 'Select issue date ...'],
                                        'pluginOptions' => [
                                            'format' => 'dd-M-yyyy',
                                            'todayHighlight' => true,
                                        ]
                                    ]);

                                ?>
                            </div>

<!--                            --><?//= $form->field($model, 'date')->textInput() ?>

<!--                            --><?//= $form->field($model, 'publishDate')->textInput() ?>

                            <div class="form-group">
                                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
