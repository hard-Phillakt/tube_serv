<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 18.10.2020
 * Time: 20:07
 */

namespace app\modules\api\modules\v2\models;

use yii\db\ActiveRecord;


class Cat extends ActiveRecord
{
    public static function tableName()
    {
        return '{{cat}}';
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
          'films'
        ];
    }

    public function getFilms(){

        return $this->hasMany(Film::class, ['parent_id' => 'id']);
    }

}