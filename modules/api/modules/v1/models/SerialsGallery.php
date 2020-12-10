<?php

namespace app\modules\api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "serials_gallery".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $alt
 * @property string $img
 * @property int $parent_id
 */
class SerialsGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serials_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'alt', 'img', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['title', 'description', 'alt', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'alt' => 'Alt',
            'img' => 'Img',
            'parent_id' => 'Parent ID',
        ];
    }

    public function extraFields()
    {
        return [
            'serials',
            'serials_img'
        ];
    }

    public function getSerials()
    {
        return $this->hasMany(Serials::class, ['id' => 'films_id'])
            ->viaTable('serials_to_serials_gallery', ['films_gallery_id' => 'id']);
    }

    public function getSerials_img()
    {
        return $this->hasMany(SerialsImg::class, ['parent_id' => 'id']);
    }
}
