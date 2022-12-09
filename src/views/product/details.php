<div class="container" id="product-section">
    <div class="row">
        <div class="col-md-6">
            <img src="/uploads/<?= $products['photo']; ?>" alt="<?= $products['name'] ?>">
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <h1><?= $products['name'] ?></h1>
            </div>
            <div><?= $products['description'] ?></div>
            <div>Pourcentage d'alcool: <?= $products['alcohol_percentage'] ?>%</div>
            <h2 class="product-price"><?= $products['price'] ?>€</h2>
            <label for="quantity">Quantité:</label>
            <input type="number" id="quantity" name="quantity" min="1" max=""><br>
            <a href="#" class="btn btn-success">Ajouter au panier</a>
        </div>

        <h4>Nos suggestions</h4>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <p class="card-text">%</p>
                            <p class="card-text"></p>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>