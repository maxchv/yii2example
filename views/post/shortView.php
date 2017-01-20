<?php
use yii\helpers\Html;
?>
<h2><?= $model->title ?></h2>

<div class="meta">
    <p>
        Author: <?= $model->user->nickname ?>
        Published date: <?= $model->created ?>
        Category: <?= $model->category->title ?>
    </p>
</div>

<div class="content">
    <?= $model->content ?>
</div>

<?= Html::a("Read more", ['view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>