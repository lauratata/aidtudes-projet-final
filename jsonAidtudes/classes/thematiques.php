<?php
require_once ('matiere.php');
class thematiques implements JsonSerializable
{
    private $id = 0;
    private $nom_thematique = null;

    private $thematiques = array();

    public function __construct($id = 0, $nom_thematique = null)
    {
        $this->id = $id;
        $this->nom_thematique = $nom_thematique;
    }

    public function getId() {return $this->id;}

    public function getNom_thematiques() {return $this->nom_thematique;}

    public function getThematiques() {return $this->thematiques;}

    public function setId($id) {$this->id = $id;}

    public function setNom_thematiques($nom_thematique) {$this->nom = $nom_thematique;}
    /**
     * @param array $thematiques
     */
    public function setThematiques($thematiques)
    {
        $this->thematiques = $thematiques;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}