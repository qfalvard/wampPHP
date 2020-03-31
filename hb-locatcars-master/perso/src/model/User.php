<?php

namespace App\Model;

class User
{

    private $id;
    private $firstname;
    private $lastname;

    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }
    /**
     * @param string $firstname
     * @return void
     */
    public function setLaststname(string $lastname)
    {
        $this->lastname = $lastname;
    }
}
