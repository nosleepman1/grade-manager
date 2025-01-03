<?php
namespace App\Models;

class Etudiants extends User{
    private  ?int $id_classe;

    public function getId_classe(): ?int
    {
        return $this->id_classe;
    }
    
}