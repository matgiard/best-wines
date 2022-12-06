<div>Page présentation générale pour les vins</div>


<ul>
    <?php foreach ($products as $product) : ?>

        <li><?= $product['name'] ?></li>
        <li><?= $product['description'] ?></li>
        <li><?= $product['alcohol_percentage'] ?>%</li>
        <li><?= $product['id_region'] ?></li>

    <?php endforeach; ?>
</ul>