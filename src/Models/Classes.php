<?php
namespace App\Models;

class classes extends BaseEntity {
    private string $nomClasse;
    
    public function __construct($nomClasse = '') {
         parent::__construct();
        $this->nomClasse = $nomClasse;
    }
    public function getNomclasse(): string{
        return $this->nomClasse;
    }
    public function setNomclasse($nom): self{
        $this->nomClasse = $nom;
        return $this;
    }

    public function toArray(): array
    {
        return[
            'idclass'=>$this->id,
            'nomClasse'=>$this->nomClasse,
            'createdAt'=> $this->createdAt ? $this->createdAt->format('Y-m-d h:i:s') : null,
            'updatedAt'=> $this->updatedAt ? $this->createdAt->format('Y-m-d h:i:s') : null,
        ];
    }

}