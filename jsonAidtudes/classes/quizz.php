<?php

require_once ('reponses.php');
require_once ('questions.php');

class Quizz implements JsonSerializable
{
    private $id = 0;

    private $quizz = array();

    public function __construct($id = 0)
    {
        $this->id = $id;
    }

    public function getId() {return $this->id;}


    public function getQuizz() {return $this->quizz;}

    public function setId($id) {$this->id = $id;}

    public function setQuizz($quizz) {$this->quizz = $quizz;}
    /**
     * @param array $quizz
     */
    public function setQuiz(array $quizz)
    {
        $this->quizz = $quizz;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}