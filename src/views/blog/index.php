<div>Ceci est la page du blog avec tous les articles.</div>
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>

<h1>Nos Articles</h1>
<a href="<?= BASE_DIR ?>/blog/insert" class="btn btn-warning">Ajouter un article</a>
<?php foreach ($articles as $article) : ?>
    <div class="border">
        <div class="col-md-4">
            <img src="uploads/blog/<?= $article['photo_article']; ?>" alt="" class="img-fluid rounded-start">
        </div>
        <h2><?= $article['title'] ?></h2>
        <div><?= substr($article['content'], 0, 300) ?></div>
        <a href="<?= BASE_DIR ?>/blog/details?id=<?= $article['id'] ?>">Voir plus</a>
        <small>Ajouté le <?= $article['date'] ?></small>
        <a href="<?= BASE_DIR ?>/blog/edit?id=<?= $article['id'] ?>" class="btn btn-warning">Modifier</a>
    </div>
<?php endforeach ?>