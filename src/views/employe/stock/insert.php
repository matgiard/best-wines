<div>Ceci est la page insert du stock</div>

<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>
<a class='btn btn-success' href=" <?= BASE_DIR ?>/employe/stock">Index</a>
<form method="post" action="<?= BASE_DIR ?>/employe/stock/insert">
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="stock">stock</label>
        <input type="number" name="stock" id="stock">
    </div>
    
    <!-- <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Ajouter photo vin:
            <input type="file" name="file">
        </form>
    </div> -->
    <div>
        <label for="alcohol_percentage">alcohol_percentage</label>
        <input type="number" name="alcohol_percentage" id="alcohol_percentage">
    </div>
    <div>
        <label for="id_region">Region</label>
        <select name="id_region" class="form-select" aria-label="Default select example">
            <option selected>Choisissez la région</option>
            <?php foreach ($regions as $region) : ?>
                <option name="<?= $region['id'] ?>" value="<?= $region['id'] ?>"><?= $region['region_name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="id_cepage">Cepage</label>
        <select name="id_cepage" class="form-select" aria-label="Default select example">
            <option selected>Choisissez le cépage</option>
            <?php foreach ($cepages as $cepage) : ?>
                <option name="<?= $cepage['id'] ?>" value="<?= $cepage['id'] ?>"><?= $cepage['cepage_name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="id_taste">Goût</label>
        <select name="id_taste" class="form-select" aria-label="Default select example">
            <option selected>Choisissez le goût</option>
            <?php foreach ($tastes as $taste) : ?>
                <option name="<?= $taste['id'] ?>" value="<?= $taste['id'] ?>"><?= $taste['taste_name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="id_association">Association</label>
        <select name="id_association" class="form-select" aria-label="Default select example">
            <option selected>Choisissez l'accord</option>
            <?php foreach ($associations as $association) : ?>
                <option name="<?= $association['id'] ?>" value="<?= $association['id'] ?>"><?= $association['association_name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="id_type">Choissisez le type de produit</label>
        <select name="id_type" class="form-select" aria-label="Default select example">
            <option selected>Choisissez l'accord</option>
            <?php foreach ($type_products as $type_product) : ?>
                <option name="<?= $type_product['id_type'] ?>" value="<?= $type_product['id_type'] ?>"><?= $type_product['type_name'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="price">Prix</label>
        <input type="number" name="price" id="price">
    </div>
    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>

</form>