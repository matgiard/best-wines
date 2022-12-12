<div class="container-fluid p-5">
    <div class="row content">
    <div class="col-sm-3 border border-3 text-center bg-light">
    <img src="<?= BASE_DIR ?>/uploads/blog/<?= $articles['photo_article']; ?>" alt="" class="rounded">
    </div>
    <div class="col-sm-9 ">        <h2><?= $articles['title'] ?></h2>
        <div><?= substr($articles['content'], 0, 300) ?>...</div>
        <a href="<?= BASE_DIR ?>/blog/details?id=<?= $articles['id'] ?>">Voir plus</a>
        <div>Ajouté le <?= date('d-m-Y H:i:s', strtotime($articles['date'])) ?></div>
    </div>
    </div>
    </div>