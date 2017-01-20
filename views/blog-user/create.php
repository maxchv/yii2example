<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BlogUser */

$this->title = 'Create Blog User';
$this->params['breadcrumbs'][] = ['label' => 'Blog Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
