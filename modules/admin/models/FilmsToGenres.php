<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "films_to_genres".
 *
 * @property int $id
 * @property int $films_id
 * @property int $genres_id
 */
class FilmsToGenres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films_to_genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['films_id', 'genres_id'], 'required'],
            [['films_id', 'genres_id'], 'integer'],
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
            'genres_id' => 'Genres ID',
        ];
    }
}
