<?php
require_once 'question4.php';


$u1= new administrator('AD001','Mohamed',Role::administrateur);
$u2= new administrator('AD002','John',Role::administrateur);
$u3= new Moderateur('MD001','Ali',Role::Moderateur);
$u4= new UtilisateurNormal('UN001','Ahmed',Role::Utilisateur);
$u5= new UtilisateurNormal('UN002','Sara',Role::Utilisateur);

//print_r($u1) ;
$g1= new GestionUtilisateurs([]);
$g1->ajouterUtilisateur($u1);
$g1->ajouterUtilisateur($u2);
$g1->ajouterUtilisateur($u3);
$g1->ajouterUtilisateur($u4);
$g1->afficherUtilisateur();