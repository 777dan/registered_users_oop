<?php
require "user.php";
class Users
{
    private $name;
    public $users;

    public function __construct($users)
    {
        $this->users = $users;
    }
    public function getUsers()
    {
        return $this->users;
    }
    public function getUser()
    {
        for ($i = 0; $i < count($this->users); $i++) {
            $user = $this->users[$i];
            return $user;
        }
    }
    public function setUsers($users)
    {
        return $this->users = $users;;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name = $name;;
    }
    public function toAddUser($user)
    {
        if ($this->toCheckLogin($user->getLogin())) {
            return false;
        }
        else {
            $this->users[] = $user;
            return true;
        }
    }
    public function toDeleteUser($searchedUser)
    {
        foreach ($this->users as $key => $user) {
            if ($searchedUser === $user->login) unset($this->users[$key]);
            return true;
        }
        return false;
    }
    public function IsValid($login, $password)
    {
        foreach ($this->users as $key => $user) {
            if ($user->IsValid($login, $password))
                return true;
        }
        return false;
    }
    private function toCheckLogin($login)
    {
        foreach ($this->users as $key => $user) {
            if ($user->getLogin() == $login)
                return true;
        }
        return false;
    }
    public function __toString()
    {
        $string = $this->name;
        foreach ($this->users as $key => $user) {
            $string .= " " . $user->getLogin();
        }
        return $string;
    }
}
