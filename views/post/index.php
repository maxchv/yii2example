<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index col-sm-8">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
        foreach ($dataProvider->models as $post) {
            echo $this->render('shortView', [
               'model' => $post
            ]);
        }
    ?>

    <!--p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    < GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            //'category_id',
            'category.title',
            'status',
            // 'created',
            // 'updated',
            'user.nickname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); -->
</div>
