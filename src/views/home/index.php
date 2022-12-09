<div id='home'>ceci est la page d'accueil depuis view/home/index.php</div>
<a class='btn btn-danger' href="register">ajout utilisateur dans BDD</a>
<a class='btn btn-success' href="employe/stock/insert">ajout produit dans BDD</a>
<a class='btn btn-success' href="nos-vins">Nos Vins</a>


<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="card mb-3"  style="max-width: 540px; min-height: 300px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="uploads/<?= $lastWhiteWine['photo'] ?>" alt="<?= $lastWhiteWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><?= $lastWhiteWine['name'] ?></h5>
                        <p class="card-text">description: <?= $lastWhiteWine['description'] ?></p>
                        <p class="card-text">Pourcentage d'alcool: <?= $lastWhiteWine['alcohol_percentage'] ?>%</p>
                        <p class="card-text">Région: <?= $lastWhiteWine['region_name'] ?></p>
                        <p class="card-text">Prix Unitaire: <?= $lastWhiteWine['price'] ?>€</p>
                        <a href="<?= BASE_DIR ?>/nos-vins/detail?name=<?= $lastWhiteWine['name'] ?>" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x ">Détails</a>
                    </div>
                </div>
            </div>

            <div class="card mb-3"  style="max-width: 540px; min-height: 300px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="uploads/<?= $lastRedWine['photo'] ?>" alt="<?= $lastRedWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><?= $lastRedWine['name'] ?></h5>
                        <p class="card-text">description: <?= $lastRedWine['description'] ?></p>
                        <p class="card-text">Pourcentage d'alcool: <?= $lastRedWine['alcohol_percentage'] ?>%</p>
                        <p class="card-text">Région: <?= $lastRedWine['region_name'] ?></p>
                        <p class="card-text">Prix Unitaire: <?= $lastRedWine['price'] ?>€</p>
                        <a href="<?= BASE_DIR ?>/nos-vins/detail?name=<?= $lastRedWine['name'] ?>" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x ">Détails</a>
                    </div>
                </div>
            </div>
            <div class="card mb-3"  style="max-width: 540px; min-height: 300px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="uploads/<?= $lastChampagne['photo'] ?>" alt="<?= $lastChampagne['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><?= $lastChampagne['name'] ?></h5>
                        <p class="card-text">description: <?= $lastChampagne['description'] ?></p>
                        <p class="card-text">Pourcentage d'alcool: <?= $lastChampagne['alcohol_percentage'] ?>%</p>
                        <p class="card-text">Région: <?= $lastChampagne['region_name'] ?></p>
                        <p class="card-text">Prix Unitaire: <?= $lastChampagne['price'] ?>€</p>
                        <a href="<?= BASE_DIR ?>/nos-vins/detail?name=<?= $lastChampagne['name'] ?>" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x ">Détails</a>
                    </div>
                </div>
            </div>  
            <div class="card mb-3"  style="max-width: 540px; min-height: 300px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="uploads/<?= $lastBox['photo'] ?>" alt="<?= $lastBox['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><?= $lastBox['name'] ?></h5>
                        <p class="card-text">description: <?= $lastBox['description'] ?></p>
                        <p class="card-text">Pourcentage d'alcool: <?= $lastBox['alcohol_percentage'] ?>%</p>
                        <p class="card-text">Région: <?= $lastBox['region_name'] ?></p>
                        <p class="card-text">Prix Unitaire: <?= $lastBox['price'] ?>€</p>
                        <a href="<?= BASE_DIR ?>/nos-vins/detail?name=<?= $lastBox['name'] ?>" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x ">Détails</a>
                    </div>
                </div>
            </div>  
    </div>
    
</div>