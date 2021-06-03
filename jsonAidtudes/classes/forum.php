<?php

require_once('thematiques.php');

class Forum
{
    private $id;
    private $date;
    private $sujet;

    private $forum = array();

    public function __construct($id = 0, $date = null, $sujet = null)
    {
        $this->id = $id;
        $this->date = $date;
        $this->sujet = $sujet;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getForum()
    {
        return $this->forum;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param array $forum
     */
    public function setForum(array $forum)
    {
        $this->forum = $forum;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
