<div>Ceci est la page insert du stock</div>

<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>
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
        <label for="photo">photo</label>
        <input type="text" name="photo" id="photo">
    </div> -->
    <div>
        <label for="alcohol_percentage">alcohol_percentage</label>
        <input type="number" name="alcohol_percentage" id="alcohol_percentage">
    </div>
    <div>
        <label for="region_id">Region</label>
        <select name="region_id" class="form-select" aria-label="Default select example">
            <option selected>Choisissez la région</option>
            <?php foreach ($regions as $region) : ?>
                <option name="<?= $region['id'] ?>" value="<?= $region['id'] ?>"><?= $region['region_name'] ?></option>
            <?php endforeach ?>

        </select>
    </div>
    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>

</form>