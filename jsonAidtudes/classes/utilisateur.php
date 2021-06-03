<?php
require_once('matiere.php');
require_once('aideur.php');
require_once('besoinaide.php');

class Utilisateur implements JsonSerializable
{
    private $id = 0;
    private $pseudo = null;
    private $password = null;
    private $etablissement = null;
    private $datecrea = null;
    private $email = null;
    private $photo = 0;

    private $utilisateurs = array();

    public function __construct($id = 0, $pseudo = null, $password = null, $etablissement = null, $datecrea = null, $email = null, $photo = 0)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->datecrea = $datecrea;
        $this->etablissement = $etablissement;
        $this->email = $email;
        $this->photo = $photo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEtablissement()
    {
        return $this->etablissement;
    }

    public function getDateCrea()
    {
        return $this->datecrea;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhotos()
    {
        return $this->photo;
    }

    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function setPrenom($password)
    {
        $this->password = $password;
    }

    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;
    }

    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @param array $utilisateurs
     */
    public function setUtilisateur($utilisateurs)
    {
        $this->utilisateur = $utilisateurs;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
