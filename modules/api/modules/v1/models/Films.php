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
            [['title', 'original_title', 'slug', 'description', 'content', 'keywords', 'original_url_video', 'proxy_url_video', 'poster_img', 'year', 'publish_date', 'tagline', 'producer', 'views', 'world_premiere', 'release_date_in_russia', 'duration', 'parent_id'], 'required'],
            [['content', 'original_url_video', 'proxy_url_video', 'poster_img'], 'string'],
            [['year'], 'safe'],
            [['publish_date', 'views', 'parent_id'], 'integer'],
            [['title', 'original_title', 'slug', 'description', 'keywords', 'tagline', 'producer', 'world_premiere', 'release_date_in_russia', 'duration'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'original_title' => 'Оригинальное название',
            'tagline' => 'Слоган',
            'producer' => 'Режиссер',
            'slug' => 'Slug',
            'description' => 'Краткое описание',
            'content' => 'Основное описание',
            'keywords' => 'Ключевые слова',
            'original_url_video' => 'Фактическое расположение файла URL видео',
            'proxy_url_video' => 'Прокси сервер URL видео',
            'poster_img' => 'Постер фильма',
            'year' => 'Год выхода фильма',
            'publish_date' => 'Дата загрузки видео на сервер',
            'views' => 'Просмотры',
            'world_premiere' => 'Премьера в мире',
            'release_date_in_russia' => 'Дата выхода в России',
            'duration' => 'Продолжительность',
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
