<?php

use yii\helpers\Html;
$this->registerJsFile("@web/js/script.js",[
    'depends' => [\yii\web\JqueryAsset::className(),],
]);

$this->title = "Vote";
$this->params['breadcrumbs'][] = Html::encode($this->title);

?>
<div id="out"></div>
<button id="vote">Vote</button>
<button id="get">Get</button>
