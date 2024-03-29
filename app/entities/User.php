<?php
namespace App\entities;

class User
{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    public function __construct($id, $firstName, $lastname, $email, $password)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
  
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }



}
?>