<div>Ceci est la page du blog avec tous les articles.</div>
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>

<h1>Nos Articles</h1>
<?php foreach ($articles as $article) : ?>
    <div class="border">
        <h2><?= $article['title'] ?></h2>
        <div><?= substr($article['content'], 0, 300) ?></div>
        <a href="">Voir plus</a>
        <small>Ajouté le <?= $article['date'] ?></small>
    </div>
<?php endforeach ?>