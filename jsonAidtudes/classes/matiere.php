<?php
require_once ('thematiques.php');
class matiere implements JsonSerializable
{
    private $id = 0;
    private $nom = null;

    private $matiere = array();

    public function __construct($id = 0, $nom = null)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getId() {return $this->id;}

    public function getNom() {return $this->nom;}

    public function getMatiere() {return $this->matiere;}

    public function setId($id) {$this->id = $id;}

    public function setNom($nom) {$this->nom = $nom;}
    /**
     * @param array $matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
