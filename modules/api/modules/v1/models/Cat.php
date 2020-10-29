<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 18.10.2020
 * Time: 20:07
 */

namespace app\modules\api\modules\v1\models;

use yii\db\ActiveRecord;


class Cat extends ActiveRecord
{
    public static function tableName()
    {
        return 'cat';
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'description',
            'alt',
            'img',
            'parent_id'
        ];
    }

    public function extraFields()
    {
        return [
            'films',
            'galls',
            'genres'
        ];
    }

    public function getFilms()
    {
        return $this->hasMany(Film::class, ['parent_id' => 'id']);
    }

    public function getGalls()
    {
        return $this->hasMany(Gall::class, ['parent_id' => 'id']);
    }

    // Связь many-to-many Категории с Жанрами через таблицу cat_to_genre
    public function getGenres()
    {
        return $this->hasMany(Genre::class, ['id' => 'genre_id'])
            ->viaTable('cat_to_genre', ['cat_id' => 'id']);
    }


}