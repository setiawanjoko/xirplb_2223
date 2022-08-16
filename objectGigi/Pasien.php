<?php

use Gigi\User;

class Pasien extends User{
    public String $no_reg;
    public $medicalHistories = array();

    public function __construct(String $username, String $email, String $no_reg)
    {
        $this->username = $username;
        $this->email = $email;
        $this->no_reg = $no_reg;
    }

    public function addMedicalHistory(String $medicalHistory)
    {
        array_push($this->medicalHistories, $medicalHistory);
    }

    public function getMedicalHistories()
    {
        return $this->medicalHistories;
    }
}

?>