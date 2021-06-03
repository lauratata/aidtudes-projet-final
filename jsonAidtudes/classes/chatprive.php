<?php

require_once ('utilisateur.php');

class chatprive implements JsonSerializable
{
    private $id = 0;
    private $message = null;

    private $chatprive = array();

    public function __construct($id = 0, $message = null)
    {
        $this->id = $id;
        $this->message = $message;
    }

    public function getId() {return $this->id;}

    public function getMessage() {return $this->message;}

    public function getChatprive() {return $this->chatprive;}

    public function setId($id) {$this->id = $id;}

    public function setMessage($message) {$this->message = $message;}
    /**
     * @param array $chatprive
     */
    public function setChatprive (array $chatprive)
    {
        $this->chatprive = $chatprive;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}