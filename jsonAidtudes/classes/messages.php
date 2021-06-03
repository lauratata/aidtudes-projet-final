<?php
require_once ('forum.php');
require_once ('sujet.php');

class messages implements JsonSerializable
{
    private $id = 0;
    private $publication = null;
    private $date = null;

    private $messages= array();

    public function __construct($id = 0, $publication = null, $date = null)
    {
        $this->id = $id;
        $this->publication = $publication;
        $this->date = $date;
    }

    public function getId() {return $this->id;}

    public function getPublication() {return $this->publication;}

    public function getDate () {return $this->date;}

    public function setId($id) {$this->id = $id;}
    public function setPublication($publication) {$this->publication = $publication;}
    public function setDate($date) {$this->date = $date;}
    /**
     * @param array $messages
     */
    public function setMessages(array $messages)
    {
        $this->messages = $messages;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}