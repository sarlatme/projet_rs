<?php
class mypdo extends PDO{ //La classe mypdo nous permet d'aller chercher les éléments de différentes tables

    private $PARAM_hote='localhost'; // le chemin vers le serveur
    private $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    private $PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter

    private $PARAM_nom_bd='projet_rs'; //connexion à la base de donnée
    private $connexion;
    public function __construct() { //Constructeur de la classe
        try { // Instanciation d'un objet pdo

            $this->connexion = new PDO('mysql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        }
        catch (PDOException $e) // Regarder si il y a des erreurs de connexion
        {

            echo 'Erreur : '.$e->getMessage().'<br />';

            $this->connexion=false;

        }
    }

    public function __get($propriete) {
        switch ($propriete) {
            case 'connexion' :
                {
                    return $this->connexion;
                    break;
                }
        }
    }

    public function listeObjet() { //Récupération des appelations des différentes catégorie d'objet
      $requete = 'SELECT cat_libelle from categorie'; // Dans $requete, on réalise le chemin jusqu'à nos informations
      $result = $this->connexion->query($requete); // On récupere le resultat de la $requete
      if($result){ // Si on récupère correctement notre requète on la renvoi, sinon on ne renvoi rien
        return $result;
      }else{
        return null;
      }
    }

        // Pour la suite, les fonctions sont similaires. Seul les requètes diffèrent.


      public function listeObjetVeh() { //Récupération des informations sur les objets de la catégorie "véhicule"
        $requete = 'SELECT * from produit p INNER JOIN composer_location cl ON cl.prd_num = p.prd_num
        INNER JOIN location l ON l.loc_num = cl.loc_num
        INNER JOIN utilisateur u ON u.uti_num = l.uti_num
        where p.cat_num = 1'; // Condition pour être seulement dans la catégorie "véhicule" || INNER JOIN pour pouvoir lier l'objet à son utilisateur/propriétaire
        $result = $this->connexion->query($requete);
        if($result){
          return $result;
        }else{
          return null;
        }
      }

      public function listeObjetPein() { //Récupération des informations sur les objets de la catégorie "peinture"
        $requete = 'SELECT * from produit p INNER JOIN composer_location cl ON cl.prd_num = p.prd_num
        INNER JOIN location l ON l.loc_num = cl.loc_num
        INNER JOIN utilisateur u ON u.uti_num = l.uti_num
        where p.cat_num = 2'; // Condition pour être seulement dans la catégorie "peinture" || INNER JOIN pour pouvoir lier l'objet à son utilisateur/propriétaire
        $result = $this->connexion->query($requete);
        if($result){
          return $result;
        }else{
          return null;
        }
      }

      public function listeObjetJard() { //Récupération des informations sur les objets de la catégorie "jardinage"
        $requete = 'SELECT * from produit p INNER JOIN composer_location cl ON cl.prd_num = p.prd_num
        INNER JOIN location l ON l.loc_num = cl.loc_num
        INNER JOIN utilisateur u ON u.uti_num = l.uti_num
        where p.cat_num = 3'; // Condition pour être seulement dans la catégorie "jardinage" || INNER JOIN pour pouvoir lier l'objet à son utilisateur/propriétaire
        $result = $this->connexion->query($requete);
        if($result){
          return $result;
        }else{
          return null;
        }
      }

      public function listeObjetBric() { //Récupération des informations sur les objets de la catégorie "bricolage"
        $requete = 'SELECT * from produit p INNER JOIN composer_location cl ON cl.prd_num = p.prd_num
        INNER JOIN location l ON l.loc_num = cl.loc_num
        INNER JOIN utilisateur u ON u.uti_num = l.uti_num
        where p.cat_num = 4'; // Condition pour être seulement dans la catégorie "bricolage" || INNER JOIN pour pouvoir lier l'objet à son utilisateur/propriétaire
        $result = $this->connexion->query($requete);
        if($result){
          return $result;
        }else{
          return null;
        }
      }

      public function listeObjetAut() { //Récupération des informations sur les objets de la catégorie "autres"
        $requete = 'SELECT * from produit p INNER JOIN composer_location cl ON cl.prd_num = p.prd_num
        INNER JOIN location l ON l.loc_num = cl.loc_num
        INNER JOIN utilisateur u ON u.uti_num = l.uti_num
        where p.cat_num = 5'; // Condition pour être seulement dans la catégorie "autres" || INNER JOIN pour pouvoir lier l'objet à son utilisateur/propriétaire
        $result = $this->connexion->query($requete);
        if($result){
          return $result;
        }else{
          return null;
        }
      }

      public function listeService() { //Récupération des apelations des différents services pourvus
        $requete = 'SELECT cat_ser_libelle from categorie_service'; // Dans $requete, on réalise le chemin jusqu'à nos informations
        $result = $this->connexion->query($requete); //on récupere le resultat de la $requete
        if($result){ // Si on récupère correctement notre requète on la renvoi, sinon on ne renvoi rien
          return $result;
        }else{
          return null;
        }
      }

      // Pour les fonctions suivantes, on se base sur la précédente.

      public function listeProBaby() { //Récupération des informations sur les professionnel de la catégorie "babysitting"
        $requete = 'SELECT * from professionnel p where p.cat_ser_num = 1;'; // Condition pour être seulement dans la catégorie "babysitting"
        $result = $this->connexion->query($requete); //on récupere le resultat de la $requete
        if($result){
          return $result;
        }else{
          return null;
        }
      }


      public function listeProJard() { //Récupération des informations sur les professionnel de la catégorie "jardinage"
        $requete = 'SELECT * from professionnel p where p.cat_ser_num = 2;'; // Condition pour être seulement dans la catégorie "jardinage"
        $result = $this->connexion->query($requete); //on récupere le resultat de la $requete
        if($result){
          return $result;
        }else{
          return null;
        }
      }


      public function listeProBric() { //Récupération des informations sur les professionnel de la catégorie "bricolage"
        $requete = 'SELECT * from professionnel p where p.cat_ser_num = 3;'; // Condition pour être seulement dans la catégorie "bricolage"
        $result = $this->connexion->query($requete); //on récupere le resultat de la $requete
        if($result){
          return $result;
        }else{
          return null;
        }
      }


    public function listeProVidan() { //Récupération des informations sur les professionnel de la catégorie "vidange"
      $requete = 'SELECT * from professionnel p where p.cat_ser_num = 4;'; // Condition pour être seulement dans la catégorie "vidange"
      $result = $this->connexion->query($requete); //on récupere le resultat de la $requete
      if($result){
        return $result;
      }else{
        return null;
      }
    }


    public function listeProDeme() { //Récupération des informations sur les professionnel de la catégorie "déménagement"
      $requete = 'SELECT * from professionnel p where p.cat_ser_num = 5;'; // Condition pour être seulement dans la catégorie "déménagement"
      $result = $this->connexion->query($requete); //on récupere le resultat de la $requete
      if($result){
        return $result;
      }else{
        return null;
      }
    }


    public function listeObjetUti() { //Récupération des informations sur les objets de l'utilisateur connecté
      session_start(); // On ouvre la session
      $uti_num = $_SESSION['num']; // On récupère le numéro d'utilisateur
      $requete = 'SELECT * from produit p INNER JOIN composer_location cl ON cl.prd_num = p.prd_num
      INNER JOIN location l ON l.loc_num = cl.loc_num
      INNER JOIN utilisateur u ON u.uti_num = l.uti_num
      where u.uti_num ='.$uti_num.''; // Requete pour récupérer les informations sur les produits liés à l'utilisateur
      $result = $this->connexion->query($requete); //on récupere le resultat de la $requete
      if($result){
        return $result;
      }else{
        return null;
      }
    }

  }
  ?>
