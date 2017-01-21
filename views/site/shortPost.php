
<h2><?= $post->title ?></h2>

<div class="meta">
    <p>
        Author: <?= $post->user->username ?>
        Category: <?= $post->category->title ?>
    </p>
</div>

<div class="content">
    <?= $post->content ?>
</div>
<hr />
