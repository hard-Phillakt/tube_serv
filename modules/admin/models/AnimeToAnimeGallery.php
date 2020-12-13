<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "anime_to_anime_gallery".
 *
 * @property int $id
 * @property int $films_id
 * @property int $films_gallery_id
 */
class AnimeToAnimeGallery extends \yii\db\ActiveRecord
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
        return 'anime_to_anime_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['films_id', 'films_gallery_id'], 'required'],
            [['films_id', 'films_gallery_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'films_id' => 'Films ID',
            'films_gallery_id' => 'Films Gallery ID',
        ];
    }
}
