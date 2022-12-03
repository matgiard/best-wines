<?php

class User
{
    private int $id;
    private string $email;
    private string $password;
    private bool $is_admin;
    private bool $is_employee;

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of email
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Get the value of password
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     * @param string $password
     *
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * Get the value of is_admin
     * @return bool
     */
    public function getIs_admin(): bool
    {
        return $this->is_admin;
    }

    /**
     * Set the value of is_admin
     * @param bool $is_admin
     *
     * @return void
     */
    public function setIs_admin(bool $is_admin): void
    {
        $this->is_admin = $is_admin;
    }

    /**
     * Get the value of is_employee
     * @return bool
     */
    public function getIs_employee(): bool
    {
        return $this->is_employee;
    }

    /**
     * Set the value of is_employee
     *@param bool $is_employee
     * @return  
     */
    public function setIs_employee(bool $is_employee): void
    {
        $this->is_employee = $is_employee;
    }
}
