<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "cat_to_genre".
 *
 * @property int $id
 * @property int $cat_id
 * @property int $genre_id
 */
class CatToGenre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat_to_genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'genre_id'], 'required'],
            [['cat_id', 'genre_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'genre_id' => 'Genre ID',
        ];
    }
}
