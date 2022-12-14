<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>

<?php endif; ?>

<!-- Create the editor container -->
<form method="POST" action="<?= BASE_DIR ?>/blog/insert" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre</label>
        <input type="text" name="title" id="title">
    </div>
    <label for="content">Votre Article</label>
    <textarea id="mytextarea" name="content"></textarea>


    <div>Ajouter une photo:
        <label for="image_browser">
            <img src="<?php $image ?>">
            <input onchange="display_image_name(this.files[0].name)" id="image_browser" type="file" name="image" style="display:none">
            Chercher l'image
        </label>
        <br>
        <small class="file_info text-muted"></small>
    </div>
    <input type="submit" name="submit" value="Enregistrer">
</form>
<script src="../../../best-wines/node_modules/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });

    function display_image_name(file_name) {
        document.querySelector(".file_info").innerHTML = '<b>Fichier choisi:</b><br>' + file_name;
    }
</script>