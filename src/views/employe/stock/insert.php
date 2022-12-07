<div>Ceci est la page insert du stock</div>

<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>
<form action="<?= BASE_DIR ?>/product/insert" method="post">
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
        <label for="photo">photo</label>
        <input type="text" name="photo" id="photo">
    </div> -->
    <div>
        <label for="alcohol_percentage">alcohol_percentage</label>
        <input type="number" name="alcohol_percentage" id="alcohol_percentage">
    </div>
    <div>
        <label for="id_region">Region</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choisissez la région</option>
            <?php foreach ($regions as $region) : ?>
                <option value="<?= $region['id'] ?>"><?= $region['region_name'] ?></option>
            <?php endforeach ?>

        </select>
    </div>

    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>

</form>