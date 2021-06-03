<?php

require_once ('utilisateur.php');

class Notes implements JsonSerializable
{
    private $id = 0;

    private $notes = array();

    public function __construct($id = 0)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }


    public function getNotes()
    {
        return $this->notes;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @param array $notes
     */
    public function setNote(array $notes)
    {
        $this->notes = $notes;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
