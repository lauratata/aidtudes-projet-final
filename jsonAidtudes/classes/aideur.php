<?php
require_once ('matiere.php');
require_once ('utilisateur.php');

class aideur
{
    private $id = 0;

    private $aideur= array();

    public function __construct($id = 0)
    {
        $this->id = $id;
    }

    public function getId() {return $this->id;}

    public function getAideur() {return $this->aideur;}

    public function setId($id) {$this->id = $id;}

    /**
     * @param array $aideur
     */
    public function setAideur($aideur)
    {
        $this->aideur = $aideur;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}