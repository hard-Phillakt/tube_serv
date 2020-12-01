<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property string $keywords
 * @property string $sourceVideo
 * @property string $proxyServerUrlVideo
 * @property string $posterImg
 * @property string $date
 * @property int $publishDate
 * @property int $parent_id
 */
class Film extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'skeeks\yii2\slug\SlugBehavior',
                'slugAttribute' => 'slug',                      //The attribute to be generated
                'attribute' => 'title',                          //The attribute from which will be generated
                // optional params
                'maxLength' => 64,                              //Maximum length of attribute slug
                'minLength' => 3,                               //Min length of attribute slug
                'ensureUnique' => true,
                'slugifyOptions' => [
                    'lowercase' => true,
                    'separator' => '-',
                    'trim' => true
                    //'regexp' => '/([^A-Za-z0-9]|-)+/',
                    //'rulesets' => ['russian'],
                    //@see all options https://github.com/cocur/slugify
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'description', 'keywords', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg', 'date', 'publishDate', 'parent_id'], 'required'],
            [['content', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg'], 'string'],
            [['parent_id'], 'integer'],
            [['title', 'name', 'slug', 'description', 'keywords', 'date', 'publishDate'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'name' => 'Название',
            'slug' => 'Транслит названия',
            'description' => 'Описание',
            'content' => 'Контент',
            'keywords' => 'Ключевые слова',
            'sourceVideo' => 'Ссылка на видео в хранилище github',
            'proxyServerUrlVideo' => 'Ссылка на proxy сервер в heroku',
            'posterImg' => 'Картинка - постер',
            'date' => 'Дата создания видео',
            'publishDate' => 'Дата публикации видео на сайте',
            'parent_id' => 'Привязка видео к категории',
        ];
    }
}
