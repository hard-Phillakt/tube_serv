<?php

namespace app\modules\api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "films_to_films_gallery".
 *
 * @property int $id
 * @property int $films_id
 * @property int $films_gallery_id
 */
class FilmsToFilmsGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films_to_films_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['films_id', 'films_gallery_id'], 'required'],
            [['films_id', 'films_gallery_id'], 'integer'],
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
            'films_gallery_id' => 'Films Gallery ID',
        ];
    }
}
