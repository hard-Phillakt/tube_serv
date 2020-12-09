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
