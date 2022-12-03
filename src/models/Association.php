<?php

class Association
{

    private int $id;
    private string $association_name;

    /**
     * Get the value of id
     * 
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of association_name
     * 
     * @return string
     */
    public function getAssociation_name()
    {
        return $this->association_name;
    }

    /**
     * Set the value of association_name
     * 
     * @param string $association_name
     *
     * @return void
     */
    public function setAssociation_name(string $association_name): void
    {
        $this->association_name = $association_name;
    }
}
