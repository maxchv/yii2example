<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.01.2017
 * Time: 5:42
 */

namespace app\controllers;


use yii\rest\ActiveController;

class VoteController extends ActiveController
{
    public $modelClass = 'app\models\Vote';

    public function behaviors()
    {
        return [[
            'class' => \yii\filters\ContentNegotiator::className(),
            'formats' => [
                'application/json' => \yii\web\Response::FORMAT_JSON,
            ],
        ]];
    }
}