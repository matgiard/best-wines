<?php

class Product
{

    private int $id;
    private string $description;
    private float $note; //float ?
    private string $photo;
    private int $stock;
    private float $alcohol_pourcentage;
    private int $id_region;
    private int $id_cepage;
    private int $id_taste;
    private int $id_association;
    private int $id_comment;

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of description
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     * 
     * @param string $description
     *
     * @return void
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * Get the value of note
     * @return float
     */
    public function getNote(): float
    {
        return $this->note;
    }

    /**
     * Set the value of note
     * 
     * @param float $note
     *
     * @return void
     */
    public function setNote(float $note): void
    {
        $this->note = $note;
    }

    /**
     * Get the value of photo
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     * 
     * @param string $photo
     *
     * @return void
     */
    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * Get the value of stock
     * 
     * @return int 
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     * 
     * @param int $stock
     *
     * @return void
     */
    public function setStock(string $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * Get the value of alcohol_pourcentage
     * @return float
     */
    public function getAlcohol_pourcentage(): float
    {
        return $this->alcohol_pourcentage;
    }

    /**
     * Set the value of alcohol_pourcentage
     *
     * @param float $alcohol_pourcentage
     * @return void
     */
    public function setAlcohol_pourcentage(float $alcohol_pourcentage): void
    {
        $this->alcohol_pourcentage = $alcohol_pourcentage;
    }

    /**
     * Get the value of id_region
     * 
     * @return int
     */
    public function getId_region(): int
    {
        return $this->id_region;
    }

    /**
     * Set the value of id_region
     *
     * @param int $id_region
     * @return void
     */
    public function setId_region(int $id_region): void
    {
        $this->id_region = $id_region;
    }

    /**
     * Get the value of id_cepage
     * @retunr int
     */
    public function getId_cepage(): int
    {
        return $this->id_cepage;
    }

    /**
     * Set the value of id_cepage
     * @param int $id_cepage
     *
     * @return void
     */
    public function setId_cepage(int $id_cepage): void
    {
        $this->id_cepage = $id_cepage;
    }

    /**
     * Get the value of id_taste
     * @return int
     */
    public function getId_taste(): int
    {
        return $this->id_taste;
    }

    /**
     * Set the value of id_taste
     * 
     * @param int $id_taste
     *
     * @return void
     */
    public function setId_taste(int $id_taste): void
    {
        $this->id_taste = $id_taste;
    }

    /**
     * Get the value of id_association
     * @return int
     */
    public function getId_association(): int
    {
        return $this->id_association;
    }

    /**
     * Set the value of id_association
     * 
     * @return int $id_association
     *
     * @return void
     */
    public function setId_association(int $id_association): void
    {
        $this->id_association = $id_association;
    }

    /**
     * Get the value of id_comment
     * @retunr int
     */
    public function getId_comment(): int
    {
        return $this->id_comment;
    }

    /**
     * Set the value of id_comment
     * 
     * @param int $id_comment
     *
     * @return  void
     */
    public function setId_comment(int $id_comment): void
    {
        $this->id_comment = $id_comment;
    }
    /**
     * Insérer un produit dans la BDD
     * @return int|false  l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO product (`description`, `photo`,`stock`,`alcohol_percentage`,`id_region`,`id_cepage`,`id_taste`,`id_association`) VALUES (:description, :photo,:stock,:alcohol_percentage,:id_region,id_cepage,:id_taste,:id_association)");

        $stmt->execute([
            "description" => $this->description,
            "photo" => $this->photo,
            "stock" => $this->stock,
            "alcohol_percentage" => $this->alcohol_percentage,
            "id_region" => $this->id_region,
            "id_cepage" => $this->cepage,
            "id_taste" => $this->id_taste,
            "id_association" => $this->id_association,

        ]);
        return $this->pdo->lastInsertId();
    }
}
