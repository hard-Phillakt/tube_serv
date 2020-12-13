<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "films_gallery_to_films_img".
 *
 * @property int $id
 * @property int $films_gallery_id
 * @property int $films_img_id
 */
class FilmsGalleryToFilmsImg extends \yii\db\ActiveRecord
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
        return 'films_gallery_to_films_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['films_gallery_id', 'films_img_id'], 'required'],
            [['films_gallery_id', 'films_img_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'films_gallery_id' => 'Films Gallery ID',
            'films_img_id' => 'Films Img ID',
        ];
    }
}
