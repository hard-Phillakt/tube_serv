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
