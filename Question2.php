<?php
require_once 'Question1.php';

class administrator extends Utilisateur{
    public string $privilege; 

    public function __construct(string $id,string $Nom,role $Type,string $privilege = 'administrateur') {
        parent::__construct($id, $Nom, $Type);
        $this->id = $id;
        $this->Nom= $Nom;
        $this->Type= $Type; 
        $this->privilege = $privilege;
    }
    
    public function getDescription()
    {
        echo "L'utilisateur:".$this->Nom."est un ".$this->Type;
    }

}

class Moderateur extends Utilisateur{
    public string $privilege; 

    public function __construct(string $id,string $Nom,role $Type,string $privilege = 'Moderateur') {
        parent::__construct($id, $Nom, $Type);
        $this->id = $id;
        $this->Nom= $Nom;
        $this->Type= $Type; 
        $this->privilege = $privilege;
    }
    
    public function getDescription()
    {
        echo "L'utilisateur:".$this->Nom."est un ".$this->Type;
    }
}

class UtilisateurNormal extends Utilisateur{
    public string $privilege; 

    public function __construct(string $id,string $Nom,role $Type,string $privilege = 'Utilisateur Normal') {
        parent::__construct($id, $Nom, $Type);
        $this->id = $id;
        $this->Nom= $Nom;
        $this->Type= $Type; 
        $this->privilege = $privilege;
    }
    
    public function getDescription()
    {
        echo "L'utilisateur:".$this->Nom."est un ".$this->Type;
    }
}
