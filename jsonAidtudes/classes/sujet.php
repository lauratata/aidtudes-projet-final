<?php

require_once ('forum.php');

class sujet implements JsonSerializable
{
    private $id = 0;
    private $titre = null;
    private $description = null;
    private $date = null;

    private $sujet = array();

    public function __construct($id = 0, $titre = null, $description = null, $date =null)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->date = $date;
    }

    public function getId() {return $this->id;}

    public function getTitre() {return $this->titre;}

    public function getDescription() {return $this->description;}

    public function getDate() {return $this->date;}

    public function getSujet() {return $this->sujet;}

    public function setId($id) {$this->id = $id;}

    public function setTitre($titre) {$this->titre = $titre;}

    public function setDescription($description) {$this->description = $description;}

    public function setDate($date) {$this->date = $date;}
    /**
     * @param array $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
