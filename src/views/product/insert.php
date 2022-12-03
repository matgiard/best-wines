<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>
<form action="<?=BASE_DIR ?>/product/insert" method="post">
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <!-- <div>
        <label for="note">Note</label>
        <input type="number" name="note" id="note">
    </div> -->
    <div>
        <label for="stock">stock</label>
        <input type="number" name="stock" id="stock">
    </div>
    <div>
        <label for="photo">photo</label>
        <input type="text" name="photo" id="photo">
    </div>
    <div>
        <label for="alcohol_percentage">alcohol_percentage</label>
        <input type="number" name="alcohol_percentage" id="alcohol_percentage">
    </div>


    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>

</form>

<div class='home'>Ceci est un test scss</div>