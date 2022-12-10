<div>Ceci est la page du blog avec tous les articles.</div>
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>

<?php foreach ($articles as $article) : ?>
    <?= $article['title'] ?>
    <?= $article['content'] ?>
<?php endforeach ?>