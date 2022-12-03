<?php

class Article
{

    private int $id;
    private string $title;
    private string $content;
    private string $date;
    private int $id_user;

    // accesseurs (getters & setters)

    /**
     * Permet de récupérer l'identifiant de l'article
     *
     * @return int
     */

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get the value of content
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * Get the value of date
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Set the value of date
     * @param string $date
     * @return void
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }
    /**
     * Get the value of id_user
     * @return string
     */
    public function getId_user(): int
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     * @param int $id_user
     * @return  void
     */
    public function setId_user(int $id_user): void
    {
        $this->id_user = $id_user;
    }
}
