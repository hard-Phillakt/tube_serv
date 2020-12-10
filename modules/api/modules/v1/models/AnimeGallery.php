<?php

namespace app\modules\api\modules\v1\models;

use Yii;

use app\modules\api\modules\v1\models\Anime;
use app\modules\api\modules\v1\models\AnimeImg;

/**
 * This is the model class for table "anime_gallery".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $alt
 * @property string $img
 * @property int $parent_id
 */
class AnimeGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anime_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'alt', 'img', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['title', 'description', 'alt', 'img'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'alt' => 'Alt',
            'img' => 'Img',
            'parent_id' => 'Parent ID',
        ];
    }

    public function extraFields()
    {
        return [
            'anime',
            'anime_img'
        ];
    }

    public function getAnime()
    {
        return $this->hasMany(Anime::class, ['id' => 'films_id'])
            ->viaTable('anime_to_anime_gallery', ['films_gallery_id' => 'id']);
    }

    public function getAnime_img()
    {
        return $this->hasMany(AnimeImg::class, ['parent_id' => 'id']);
    }
}
