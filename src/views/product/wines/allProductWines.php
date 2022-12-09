<div>Page présentation générale pour les vins</div>
<div id="filter">
    <form action="" method="get">

        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                    <div id="criteria" class="text-start">Type de vin :</div>
                    <div class=" form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Vin Rouge
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Vin Blanc
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Champagne
                        </label>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <label for="customRange3" class="form-label">Trier par prix</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                </div>
                <div class="col col-lg-3">

                    <div class="form-check text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="reverseCheck1">
                            Notre séléction vin rouge
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="reverseCheck2">
                            Notre séléction de vin Blanc
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="reverseCheck2">
                            Notre séléction de champagne
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit">Filtrer</button>

    </form>
</div>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach ($products as $product) : ?>

            <div class="card mb-3"  style="max-width: 540px; min-height: 300px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="uploads/<?= $product['photo'] ?>" alt="<?= $product['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text">description: <?= $product['description'] ?></p>
                        <p class="card-text">Pourcentage d'alcool: <?= $product['alcohol_percentage'] ?>%</p>
                        <p class="card-text">Région: <?= $product['region_name'] ?></p>
                        <p class="card-text">Prix Unitaire: <?= $product['price'] ?>€</p>
                        <a href="<?= BASE_DIR ?>/nos-vins/detail?name=<?= $product['name'] ?>" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x ">Détails</a>
                    </div>
                </div>
            </div>
            
        <?php endforeach; ?>
        
    </div>
    
</div>