<?php


namespace app\modules\api\modules\v1\models;

use Yii;

use app\modules\api\modules\v1\models\FilmsImg;
use app\modules\api\modules\v1\models\Films;

/**
 * This is the model class for table "films_gallery".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $alt
 * @property string $img
 * @property int $parent_id
 */

class FilmsGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films_gallery';
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
            'films',
            'films_img'
        ];
    }

    public function getFilms()
    {
        return $this->hasMany(Films::class, ['id' => 'films_id'])
            ->viaTable('films_to_films_gallery', ['films_gallery_id' => 'id']);
    }

    public function getFilms_img()
    {
        return $this->hasMany(FilmsImg::class, ['parent_id' => 'id']);
    }


}
