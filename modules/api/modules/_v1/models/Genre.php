<?php

namespace app\modules\api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $alt
 * @property string $img
 * @property int $parent_id
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'description', 'alt', 'img', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['title', 'slug', 'description', 'alt', 'img'], 'string', 'max' => 255],
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
            'slug' => 'Slug',
            'description' => 'Description',
            'alt' => 'Alt',
            'img' => 'Img',
            'parent_id' => 'Parent ID',
        ];
    }
}
