<div class="container text-center p-3">
    <a class='btn color1' href=" <?= BASE_DIR ?>/administrateur">Retour à la liste des employés</a>
    <?php if (isset($message)) : ?>
        <div class="text-center fs-4">
            <span><?= $message ?></span>
        </div>
    <?php endif; ?>
    <form method="POST" action="<?= BASE_DIR ?>/administrateur/edit" class="text-center">
        <div class="p-5  text-center">
            <div class="pb-5">
                <label for="email">email:</label>
                <input type="text" name="email" id="email" value="<?= $edit_temp['email'] ?> ">
            </div>
            <!-- <div class="col-6">
                <label for="password">mot de passe:</label>
                <input type="texte" name="password" id="password" value="<?= $edit_temp['password'] ?>">
            </div> -->
            <div> Mettre en administrateur</div>
            <div class="form-check">
                <label class="" for="is_admin">Non</label>
                <input class="" name="is_admin" id="is_admin" type="radio" value="0" aria-label="Non" <?php if (($edit_temp['is_admin'] !== 1)) : ?> <?= "checked" ?>><?php endif; ?>
            </div>
            <div class="form-check">
                <label class="" for="is_admin">Oui</label>
                <input class="" name="is_admin" id="is_admin" type="radio" value="1" aria-label="Oui" <?php if (($edit_temp['is_admin'] == 1)) : ?> <?= "checked" ?>><?php endif; ?>
            </div>
        </div>
</div>
<div class=" text-center pb-3">
    <input type="submit" name="submit" value="Enregistrer" class="btn color1">
</div>