<div>Page présentation générale pour les vins</div>
<form action="" method="get">
    <div id="filter">
        <div id="criteria">Type de vin</div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rouge" id="inlineRadio1">
            <label class="form-check-label" for="inlineRadio1">Vin Rouge</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="white-wines" id="inlineRadio2" value="1">
            <label class="form-check-label" for="inlineRadio2">Vin Blanc</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Champagne" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Champagne</label>
        </div>
    </div>
    <button type="submit">Filtrer</button>
</form>


<?php foreach ($products as $product) : ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name'] ?></h5>
            <p class="card-text">description <?= $product['description'] ?></p>
            <p class="card-text">Pourcentage d'alcool <?= $product['alcohol_percentage'] ?>%</p>
            <p class="card-text">region de provenance <?= $product['region_name'] ?></p>
            <p class="card-text">Prix Unitaire <?= $product['price'] ?>€</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    <?php endforeach; ?>
    </div>