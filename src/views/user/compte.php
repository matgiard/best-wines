<div class=" text-center py-5">
    <h1>Voici la liste de vos commandes</h1>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Prix total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <?php foreach ($all_invoices as $invoice) : ?>
                    <?php if ($_SESSION["user"]["id"] == $sale["id_user"]) : ?>
                        <tr>
                            <td><?= $invoice['date'] ?></td>
                            <td><?= $sale['total_price'] ?></td>
                        </tr>
                    <?php endif ?>
                <?php endforeach; ?>
            </form>
        </tbody>
    </table>
</div>