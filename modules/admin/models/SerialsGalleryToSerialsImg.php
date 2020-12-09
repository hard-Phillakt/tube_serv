<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "serials_gallery_to_serials_img".
 *
 * @property int $id
 * @property int $films_gallery_id
 * @property int $films_img_id
 */
class SerialsGalleryToSerialsImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serials_gallery_to_serials_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['films_gallery_id', 'films_img_id'], 'required'],
            [['films_gallery_id', 'films_img_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'films_gallery_id' => 'Films Gallery ID',
            'films_img_id' => 'Films Img ID',
        ];
    }
}
