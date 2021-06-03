<?php

require_once ('reponses.php');
require_once ('quizz.php');

class questions implements JsonSerializable
{
    private $id = 0;
    private $question = null;

    private $questions = array();

    public function __construct($id = 0, $question = null)
    {
        $this->id = $id;
        $this->question = $question;
    }

    public function getId() {return $this->id;}

    public function getQuestion() {return $this->question;}

    public function getQuestions() {return $this->questions;}

    public function setId($id) {$this->id = $id;}

    public function setQuestion($question) {$this->nom = $question;}
    /**
     * @param array $questions
     */
    public function setQuestions(array $questions)
    {
        $this->questions = $questions;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}