<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 24.10.2020
 * Time: 23:21
 */

namespace app\controllers;


use yii\web\Controller;

class IndexController extends Controller
{

    public $layout = 'clear';

    public function actionIndex(){

        return $this->render('index');
    }
}