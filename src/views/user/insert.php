<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>
<form action="<?=BASE_DIR ?>/register" method="post">
    <div>
        <label for="email">email:</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="password">mot de passe:</label>
        <input type="texte" name="password" id="password">
    </div>

    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>

</form>