<?php

require_once ('quizz.php');

class reponses implements JsonSerializable
{
    private $id = 0;
    private $reponse = null;

    private $reponses = array();

    public function __construct($id = 0, $reponse = null)
    {
        $this->id = $id;
        $this->reponse = $reponse;
    }

    public function getId() {return $this->id;}

    public function getReponse() {return $this->reponse;}

    public function getReponses() {return $this->reponses;}

    public function setId($id) {$this->id = $id;}

    public function setReponse($reponse) {$this->reponse = $reponse;}
    /**
     * @param array $reponses
     */
    public function setReponses(array $reponses)
    {
        $this->reponses = $reponses;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}