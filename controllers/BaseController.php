<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 20.10.2020
 * Time: 0:25
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\auth\HttpBasicAuth;

use app\modules\admin\models\User;

class BaseController extends Controller
{
    public function behaviors()
    {
        return [
            'basicAuth' => [
                'class' => HttpBasicAuth::class,
                'auth' => function ($username, $password) {
                    $classUser = new User();
                    $user = $classUser::find()->where(['name' => $username])->one();
                    if (Yii::$app->getSecurity()->validatePassword($password, $user->password)) {
                        //  return иницализирует авторизацию
                        return $user;
                    }
                },
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->redirect('/admin/films');
    }

    public function actionOut()
    {
        Yii::$app->user->logout();

        return $this->redirect('/site/index');
    }

}