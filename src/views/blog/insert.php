<div>Ceci est la page du blog pour insérer un article</div>

<!-- Create the editor container -->
<form action="" method="POST">
    <input type="text" name="title" placeholder="Titre"></input>
    <div id="editor" name="content">
        <p>Hello World!</p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><br /></p>
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
    <button type=" submit">Enregister l'article</button>
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