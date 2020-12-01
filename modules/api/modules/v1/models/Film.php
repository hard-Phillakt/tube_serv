<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 18.10.2020
 * Time: 20:07
 */

namespace app\modules\api\modules\v1\models;

use yii\db\ActiveRecord;


class Film extends ActiveRecord
{
    public static function tableName()
    {
        return 'film';
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'name',
            'slug',
            'description',
            'content',
            'keywords',
            'sourceVideo',
            'proxyServerUrlVideo',
            'posterImg',
            'date',
            'publishDate',
            'parent_id'
        ];
    }

    public function extraFields()
    {
        return [
            'cat',
        ];
    }

    public function getCat()
    {
        return $this->hasOne(Cat::class, ['id' => 'parent_id']);
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
}