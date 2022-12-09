<div id='home'>ceci est la page d'accueil depuis view/home/index.php</div>
<a class='btn btn-danger' href="register">ajout utilisateur dans BDD</a>
<a class='btn btn-success' href="employe/stock/insert">ajout produit dans BDD</a>
<a class='btn btn-success' href="nos-vins">Nos Vins</a>

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
                <tr>
                    <td><?= $lastWhiteWine['id'] ?></td>
                    <td><?= $lastWhiteWine['name'] ?></td>
                    <td><?= $lastWhiteWine['stock'] ?></td>
                    <td>
                        <a href="<?= BASE_DIR ?>/employe/stock/edit?id=<?= $lastWhiteWine['id'] ?>" class="btn btn-warning">Modifier</a>
                    </td>
                    <td>
                        <a href="<?= BASE_DIR ?>/employe/stock/delete?id=<?= $lastWhiteWine['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td><?= $lastRedWine['id'] ?></td>
                    <td><?= $lastRedWine['name'] ?></td>
                    <td><?= $lastRedWine['stock'] ?></td>
                    <td>
                        <a href="<?= BASE_DIR ?>/employe/stock/edit?id=<?= $lastWhiteWine['id'] ?>" class="btn btn-warning">Modifier</a>
                    </td>
                    <td>
                        <a href="<?= BASE_DIR ?>/employe/stock/delete?id=<?= $lastWhiteWine['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

    </tbody>
</table>