<div>Ceci est la page du blog pour insérer un article</div>
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
    <div>
        <label for="content">Zone de texte</label>
        <textarea id="editor" type="text-area" name="content" id="content" rows="30" cols="50"></textarea>
        <!-- <div id="editor" name="content" id="content"> -->

    </div>

    </div>
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





<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor', {
        modules: {
            toolbar: [
                [{
                    header: [1, 2, false]
                }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block']
            ]
        },
        placeholder: 'Ecrivez votre article',
        theme: 'snow'
    });

    function display_image_name(file_name) {
        document.querySelector(".file_info").innerHTML = '<b>Fichier choisi:</b><br>' + file_name;
    }
</script>