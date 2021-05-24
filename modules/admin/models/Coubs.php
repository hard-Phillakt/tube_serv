<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "coubs".
 *
 * @property int $id
 * @property string $title
 * @property string $original_title
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property string $keywords
 * @property string $original_url_video
 * @property string $proxy_url_video
 * @property string $poster_img
 * @property string $year
 * @property string $publish_date
 * @property string $tagline
 * @property int $views
 * @property string $duration
 * @property int $parent_id
 */
class Coubs extends \yii\db\ActiveRecord
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
        return 'coubs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'original_title', 'description', 'content', 'keywords', 'original_url_video', 'proxy_url_video', 'poster_img', 'year', 'publish_date', 'tagline', 'duration', 'parent_id'], 'required'],
            [['content', 'original_url_video', 'proxy_url_video', 'poster_img'], 'string'],
            [['views', 'parent_id'], 'integer'],
            [['title', 'original_title', 'slug', 'description', 'keywords', 'tagline', 'duration'], 'string', 'max' => 255],
            [['year', 'publish_date'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'original_title' => 'Original Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'keywords' => 'Keywords',
            'original_url_video' => 'Original Url Video',
            'proxy_url_video' => 'Proxy Url Video',
            'poster_img' => 'Poster Img',
            'year' => 'Year',
            'publish_date' => 'Publish Date',
            'tagline' => 'Tagline',
            'views' => 'Views',
            'duration' => 'Duration',
            'parent_id' => 'Parent ID',
        ];
    }
}
