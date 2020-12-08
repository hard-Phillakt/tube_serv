<?php

namespace app\modules\api\modules\v1\models;

use Yii;

use app\modules\api\modules\v1\models\FilmsGallery;
use app\modules\admin\models\FilmsGenres;

/**
 * This is the model class for table "films".
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
class Films extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'slug', 'description', 'content', 'keywords', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg', 'date', 'publishDate', 'parent_id'], 'required'],
            [['content', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg'], 'string'],
            [['date'], 'safe'],
            [['publishDate', 'parent_id'], 'integer'],
            [['title', 'name', 'slug', 'description', 'keywords'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'keywords' => 'Keywords',
            'sourceVideo' => 'Source Video',
            'proxyServerUrlVideo' => 'Proxy Server Url Video',
            'posterImg' => 'Poster Img',
            'date' => 'Date',
            'publishDate' => 'Publish Date',
            'parent_id' => 'Parent ID',
        ];
    }

    public function extraFields()
    {
        return [
            'films_to_gallerys',
            'films_to_genres'
        ];
    }

    public function getFilms_to_gallerys()
    {
        return $this->hasMany(FilmsGallery::class, ['id' => 'films_gallery_id'])
            ->viaTable('films_to_films_gallery', ['films_id' => 'id']);
    }

    public function getFilms_to_genres()
    {
        return $this->hasMany(FilmsGenres::class, ['id' => 'genres_id'])
            ->viaTable('films_to_genres', ['films_id' => 'id']);
    }

}
