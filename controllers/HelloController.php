<?php
/**
 * Created by PhpStorm.
 * User: shaptala
 * Date: 20.01.2017
 * Time: 17:09
 */

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionGreeting($msg = "Hello") {
        return $this->render('index', ["msg" => $msg]);
    }
}