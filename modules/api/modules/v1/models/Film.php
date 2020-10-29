<?php

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
            'cat'
        ];
    }


    public function getCat(){
       return $this->hasOne(Cat::class, ['id' => 'parent_id']);
    }


}