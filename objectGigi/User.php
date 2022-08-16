<?php
namespace Gigi;

class User{
    public String $username, $email;
    protected String $password;
    protected bool $login = false;

    public function __construct(String $username, String $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->username . " berhasil login<br>";
    }

    public function logout()
    {
        echo $this->username . " berhasil logout<br>";
    }

    public function checkLogin():bool
    {
        return $this->login;
    }

    public function setUsername(String $username){
        $this->username = $username;
    }
}

?>