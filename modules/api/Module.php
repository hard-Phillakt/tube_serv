<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 19.10.2020
 * Time: 14:46
 */

namespace app\modules\api;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->modules = [
            'v1' => [
                'class' => 'app\modules\api\modules\v1\Module',
            ],
            'v2' => [
                'class' => 'app\modules\api\modules\v2\Module',
            ],
        ];
    }
}