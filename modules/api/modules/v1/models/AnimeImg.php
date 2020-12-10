<?php

namespace app\modules\api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "anime_img".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $alt
 * @property string $img
 * @property int $parent_id
 */
class AnimeImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anime_img';
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
}
