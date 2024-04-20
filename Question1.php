<?php

require_once 'role.php';
abstract class Utilisateur{
    public string $id;
    public string $Nom;
    public role $Type;

    public function __construct(string $id,string $Nom,role $Type) {
        $this->id = $id;
        $this->Nom= $Nom;
        $this->Type= $Type;
    }
    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->Nom;
    }
    public function getType(){
        return $this->Type;
    }
    abstract function getDescription();

}
