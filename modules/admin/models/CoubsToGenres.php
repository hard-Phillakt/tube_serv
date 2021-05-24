<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "coubs_to_genres".
 *
 * @property int $id
 * @property int $coubs_id
 * @property int $genres_id
 */
class CoubsToGenres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coubs_to_genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['coubs_id', 'genres_id'], 'required'],
            [['coubs_id', 'genres_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'coubs_id' => 'Coubs ID',
            'genres_id' => 'Genres ID',
        ];
    }
}
