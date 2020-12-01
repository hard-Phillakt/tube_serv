<?php

namespace app\modules\api\modules\v2\models;

use yii\db\ActiveRecord;

class Film extends ActiveRecord
{
    public static function tableName()
    {
        return '{{film}}';
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'name',
            'description',
            'content',
            'keywords',
            'sourceVideo',
            'posterImg',
            'date',
            'publishDate',
            'proxyServerUrlVideo'
        ];
    }

    public function extraFields()
    {
        return [
            'cat',
            'galls',
            'genres'
        ];
    }

    public function rules()
    {
        return [
            [['title', 'name', 'slug', 'description', 'keywords', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg', 'date', 'publishDate'], 'required'],
            [['content', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg'], 'string'],
            [['parent_id'], 'integer'],
            [['title', 'name', 'slug', 'description', 'keywords', 'date', 'publishDate'], 'string', 'max' => 255],
        ];
    }


    public function getCat(){
       return $this->hasOne(Cat::class, ['id' => 'parent_id']);
    }

    public function getGalls(){
       return $this->hasMany(Gall::class, ['parent_id' => 'id']);
    }

    public function getGenres(){
       return $this->hasMany(Genre::class, ['parent_id' => 'id']);
    }

}