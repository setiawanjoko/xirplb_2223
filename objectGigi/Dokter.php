<?php
namespace Gigi;

use Gigi\User;

class Dokter extends User{ // extends => Inheritance || Pewarisan
    public String $no_reg;
    // mendapatkan atribut username, email, password, dan login dari parent class (User)

    public function __construct(String $username, String $email, String $no_reg)
    {
        $this->username = $username;
        $this->email = $email;
        $this->no_reg = $no_reg;
    }
}
?>