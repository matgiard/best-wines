<div>nos fournisseurs</div>
<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>

<h1>Nos Fournisseurs</h1>
<a href="<?= BASE_DIR ?>/nos-fournisseurs" class="btn btn-warning">Ajouter un fournisseur</a>
<?php foreach ($suppliers as $supplier) : ?>

    <div class="border">
        <div class="col-md-4">
            <img src="uploads/supplier/<?= $supplier['image_supp']; ?>" alt="" class="img-fluid rounded-start">
        </div>
        <h2><?= $supplier['name'] ?></h2>
        <div><?= substr($supplier['content'], 0, 300) ?></div>
        <a href="<?= BASE_DIR ?>/nos-fournisseurs/details?id=<?= $supplier['id'] ?>">Voir plus</a>

        <a href="<?= BASE_DIR ?>/nos-fournisseurs/edit?id=<?= $supplier['id'] ?>" class="btn btn-warning">Modifier</a>
    </div>
<?php endforeach ?>