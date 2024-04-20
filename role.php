<?php

enum role {
    case administrateur;
    case Moderateur;
    case Utilisateur;
    public function toString() {
        return match($this) {
            self::administrateur => 'administrateur',
            self::Moderateur => 'Moderateur',
            self::Utilisateur => 'Utilisateur',
        };
    }
}