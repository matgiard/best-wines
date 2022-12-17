<?php

namespace App\Models;

use Core\Model;

class Sale extends Model
{

    private int $id;
    private int $id_product;
    private int $id_user;
    private int $quantity;
    private float $price_total_product;
    protected string $table_name = "sale";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of id_product
     * @return int
     */
    public function getId_product(): int
    {
        return $this->id_product;
    }

    /**
     * Set the value of id_product
     * @param int $id_product
     *
     * @return void
     */
    public function setId_product(int $id_product): void
    {
        $this->id_product = $id_product;
    }

    /**
     * Get the value of id_user
     * @return int
     */
    public function getId_user(): int
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     * @param int $id_user
     * @return void
     */
    public function setId_user(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * Get the value of quantity
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     * @param int $quantity
     * @return  void
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Get the value of $price_total_product
     * @return float
     */
    public function getPrice_Total_Product(): float
    {
        return $this->price_total_product;
    }

    /**
     * Set the value of price_total_product
     * @param float $price_total_product
     *
     * @return  void
     */
    public function setPrice_Total_Product(float $price_total_product): void
    {
        $this->$price_total_product = $price_total_product;
    }

    public function InsertSale(): int|false
    {

        $stmt = $this->pdo->prepare("INSERT INTO sale (`id_product`, `quantity`) VALUES (:id_product, :quantity)");

        $stmt->execute([
            "id_product" => $this->id_product,
            "quantity" => $this->quantity,
        ]);


        return $this->pdo->lastInsertId();
    }
    public function findProductBySale()
    {
        $sql_query = "SELECT * FROM {$this->table_name} JOIN product ON sale.id_product= product.id";
        $stmt = $this->pdo->prepare($sql_query);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
