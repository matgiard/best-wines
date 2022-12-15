
<div class="container" id="product-section">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= BASE_DIR ?>/uploads/vins/<?= $products['photo']; ?>" alt="<?= $products['name'] ?>">

        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <h1><?= $products['name'] ?></h1>
            </div>
            <div><?= $products['description'] ?></div>
            <div>Pourcentage d'alcool: <?= $products['alcohol_percentage'] ?>%</div>
            <h2 class="product-price"><?= $products['price'] ?>€</h2>
            <h2 class="product-price"><?= $products['region_name'] ?></h2>
            <section>
                <form action="/best-wines/cart/add?name=<?= $products['name'] ?>" method="POST">
                    <p class="qty">
                        <label for="qty">Quantity:</label>

                        <input type="number" name="qty" id="qty" min="1" max="30" step="1" value="1">

                        <button type="input" class="btn btn-success">Ajouter au panier</button>
                    </p>
                </form>
            </section>

        </div>
    </div>
</div>

<h4>Autres Vins conseillés</h4>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h5 class="card-title"></h5>
                    <div class="col-md-4">
                        <img src="<?= BASE_DIR ?>/uploads/vins/<?= $lastWhiteWine['photo'] ?>" alt="<?= $lastWhiteWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <p class="card-title"><?= $lastWhiteWine['name'] ?></p>
                    <p class="card-text"><?= $lastWhiteWine['price'] ?>€</p>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
    </div>
</div>