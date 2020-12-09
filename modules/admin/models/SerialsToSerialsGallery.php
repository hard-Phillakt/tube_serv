<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "serials_to_serials_gallery".
 *
 * @property int $id
 * @property int $films_id
 * @property int $films_gallery_id
 */
class SerialsToSerialsGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serials_to_serials_gallery';
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
