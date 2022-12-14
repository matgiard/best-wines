<a class='btn btn-success' href=" <?= BASE_DIR ?>/employe/stock/insert">Ajouter un produit</a>


<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Rechercher un produit..." aria-label="Search">
    <div class="result"></div>
    <button class="btn btn-outline-light" type="submit">Rechercher</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Référence</th>
            <th scope="col">Nom</th>
            <th scope="col">Stock</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <form action="" method="POST">
            <?php
            foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['stock'] ?></td>
                    <td>
                        <a href="<?= BASE_DIR ?>/employe/stock/edit?id=<?= $product['id'] ?>" class="btn btn-warning">Modifier</a>
                    </td>
                    <td>
                        <a href="<?= BASE_DIR ?>/employe/stock/delete?id=<?= $product['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </form>
    </tbody>
</table>