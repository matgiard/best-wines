<?php
//todo
namespace Core;

abstract class Model
{
    protected \PDO $pdo;

    protected string $table_name;
    protected string $region = 'region ON product.id_region=region.id';

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }



    /**
     * @param int $id l'identifiant de l'élément à afficher
     * @param boolean $is_array s'il est à true on aura les résultats sous format d'un tableau associatif, si non c'est le format du model
     * @return array|object|false
     */
    public function find(int $id, bool $is_array = false): array|object|false
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table_name} WHERE id = :id ");
        $stmt->bindParam(':id', $id);
        if ($is_array)
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        else
            $stmt->setFetchMode(\PDO::FETCH_CLASS, get_called_class());
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * get all elements
     * @param boolean $is_array s'il est à true on aura les résultats sous format d'un tableau associatif, si non c'est le format du model
     * @return array|false
     */


    public function findAll(): array
    {

        $stmt = $this->pdo->prepare(
            "SELECT * FROM {$this->table_name} JOIN $this->region
        -- JOIN taste ON product.id_taste=taste.id
        -- JOIN cepage ON product.id_cepage=cepage.id
        -- JOIN association ON product.id_association=association.id
        -- JOIN type_product ON product.id_type=type_product.id_type
        "
        );
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * delete an item
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->table_name} WHERE id = :id JOIN ");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    /**
     * permet de récupérer plusieurs éléments selon un ou plusieurs critères de recherche
     * @param array $criteria les critères de recherche
     * @param boolean $is_array s'il est à true on aura les résultats sous format d'un tableau associatif, si non c'est le format du model
     * @return array|false
     */
    public function findAllBy(array $criteria, bool $is_array = false): array|false
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }

        $sql_query = "SELECT * FROM {$this->table_name} WHERE ";
        $count = 0;
        foreach ($criteria as $key => $value) {
            $count++;
            if ($count > 1) {
                $sql_query .= " AND ";
            }
            $sql_query .= " $key = :$key ";
        }

        $stmt = $this->pdo->prepare($sql_query);

        if ($is_array)
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        else
            $stmt->setFetchMode(\PDO::FETCH_CLASS, get_called_class());
        $stmt->execute($criteria);
        return $stmt->fetchAll();
    }

    /**
     * Récupérer un élément avec un ou plusieurs critères
     * @param array $criteria
     * @param boolean $is_array s'il est à true on aura les résultats sous format d'un tableau associatif, si non c'est le format du model
     * @return object|array|false
     * @throws Exception
     */
    public function findOneBy(array $criteria, bool $is_array = false): object|array|false
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }
        $sql_query = "SELECT * FROM {$this->table_name} WHERE ";
        $count = 0;
        foreach ($criteria as $key => $value) {
            $count++;
            if ($count > 1) {
                $sql_query .= " AND ";
            }
            $sql_query .= " $key = :$key ";
        }

        $stmt = $this->pdo->prepare($sql_query);
        foreach ($criteria as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }
        if ($is_array)
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        else
            $stmt->setFetchMode(\PDO::FETCH_CLASS, get_called_class());
        $stmt->execute();
        return $stmt->fetch();
    }
}
