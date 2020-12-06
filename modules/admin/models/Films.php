<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property string $keywords
 * @property string $sourceVideo
 * @property string $proxyServerUrlVideo
 * @property string $posterImg
 * @property string $date
 * @property int $publishDate
 * @property int $parent_id
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'slug', 'description', 'content', 'keywords', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg', 'date', 'publishDate', 'parent_id'], 'required'],
            [['content', 'sourceVideo', 'proxyServerUrlVideo', 'posterImg'], 'string'],
            [['date'], 'safe'],
            [['publishDate', 'parent_id'], 'integer'],
            [['title', 'name', 'slug', 'description', 'keywords'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'keywords' => 'Keywords',
            'sourceVideo' => 'Source Video',
            'proxyServerUrlVideo' => 'Proxy Server Url Video',
            'posterImg' => 'Poster Img',
            'date' => 'Date',
            'publishDate' => 'Publish Date',
            'parent_id' => 'Parent ID',
        ];
    }
}
