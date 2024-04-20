<?php
require_once 'Question2.php';
function dd($data) {
    echo "<pre style='background-color: #063146; color: #fff; padding: 10px; font-family: monospace;'>";
    var_dump($data);
    echo "</pre>";
}

class GestionUtilisateurs{
    public array $users=[];
    
    public function __construct(array $users) {
        $this->users = $users;
    }
    public function ajouterUtilisateur(Utilisateur $user): void {
       $this->users[]=$user;
        
    }
    public function afficherUtilisateur(){
        dd($this->users);
    }
}