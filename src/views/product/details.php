<div class="container" id="product-section">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= BASE_DIR ?>/uploads/<?= $products['photo']; ?>" alt="<?= $products['name'] ?>">

        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <h1><?= $products['name'] ?></h1>
            </div>
            <div><?= $products['description'] ?></div>
            <div>Pourcentage d'alcool: <?= $products['alcohol_percentage'] ?>%</div>
            <h2 class="product-price"><?= $products['price'] ?>€</h2>
            <h2 class="product-price"><?= $products['region_name'] ?></h2>
            <label for="quantity">Quantité:</label>
            <input type="number" id="quantity" name="quantity" min="1" max=""><br>
            <a href="#" class="btn btn-success">Ajouter au panier</a>
        </div>


    </div>

</div>