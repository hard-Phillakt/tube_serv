<?php

namespace app\modules\api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "serials".
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
 * @property string $producer
 * @property string $views
 * @property string $world_premiere
 * @property string $release_date_in_russia
 * @property string $duration
 * @property int $parent_id
 */
class Serials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'original_title', 'slug', 'description', 'content', 'keywords', 'original_url_video', 'proxy_url_video', 'poster_img', 'year', 'publish_date', 'tagline', 'producer', 'views', 'world_premiere', 'release_date_in_russia', 'duration', 'parent_id'], 'required'],
            [['content', 'original_url_video', 'proxy_url_video', 'poster_img', 'views'], 'string'],
            [['parent_id'], 'integer'],
            [['title', 'original_title', 'slug', 'description', 'keywords', 'tagline', 'producer', 'world_premiere', 'release_date_in_russia', 'duration'], 'string', 'max' => 255],
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
            'producer' => 'Producer',
            'views' => 'Views',
            'world_premiere' => 'World Premiere',
            'release_date_in_russia' => 'Release Date In Russia',
            'duration' => 'Duration',
            'parent_id' => 'Parent ID',
        ];
    }

    public function extraFields()
    {
        return [
            'serials_items',
            'serials_to_gallerys',
            'serials_to_genres'
        ];
    }

    public function getSerials_to_gallerys()
    {
        return $this->hasMany(SerialsGallery::class, ['id' => 'films_gallery_id'])
            ->viaTable('serials_to_serials_gallery', ['films_id' => 'id']);
    }

    public function getSerials_to_genres()
    {
        return $this->hasMany(SerialsGenres::class, ['id' => 'genres_id'])
            ->viaTable('serials_to_genres', ['films_id' => 'id']);
    }

    public function getSerials_items()
    {
        return $this->hasMany(SerialsItems::class, ['parent_id' => 'id']);
    }
}
