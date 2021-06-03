<?php
require_once ('thematiques.php');

class videos implements JsonSerializable
{
    private $id = 0;
    private $nom = null;
    private $url = null;

    private $videos = array();

    public function __construct($id = 0, $nom = null, $url = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->url = $url;
    }

    public function getId() {return $this->id;}

    public function getNom() {return $this->nom;}

    public function getUrl() {return $this->url;}

    public function getVideos() {return $this->videos;}

    public function setId($id) {$this->id = $id;}

    public function setNom($nom) {$this->nom = $nom;}

    public function setUrl($url) {$this->url = $url;}

    /**
     * @param array $videos
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}