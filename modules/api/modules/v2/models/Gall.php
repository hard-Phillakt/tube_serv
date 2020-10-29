<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 18.10.2020
 * Time: 14:11
 */

namespace app\modules\api\modules\v2\models;

use yii\db\ActiveRecord;

class Gall extends ActiveRecord
{

    public static function tableName()
    {
        return '{{image_gallery}}';
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'description',
            'alt',
            'img',
            'parent_id',
        ];
    }

}