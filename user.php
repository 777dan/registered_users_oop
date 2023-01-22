<?php
class User
{
    public $login;
    public $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setPassword($password)
    {
        return $this->password = $password;
    }
    public function __toString()
    {
        return "{$this->login} {$this->password}";
    }
    public function IsValid($login, $password)
    {
        return $this->login === $login && $this->password === $password;
    }
}