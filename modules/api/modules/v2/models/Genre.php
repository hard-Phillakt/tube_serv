<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 18.10.2020
 * Time: 14:11
 */

namespace app\modules\api\modules\v2\models;

use yii\db\ActiveRecord;

class Genre extends ActiveRecord
{
    public static function tableName(){
        return '{{genre}}';
    }
}