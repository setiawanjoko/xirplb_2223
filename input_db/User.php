<?php
namespace Product;

class User{
    public int $id;
    public String $name, $email, $password, $permission;

    public function __construct($id, $name, $email, $password, $permission)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->permission = $permission;
    }
}

?>