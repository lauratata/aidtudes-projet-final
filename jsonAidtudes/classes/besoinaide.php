<?php

require_once ('matiere.php');
require_once ('utilisateur.php');

class besoinaide
{
    private $id = 0;

    private $besoinaide = array();

    public function __construct($id = 0)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBesoinaide()
    {
        return $this->besoinaide;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param array $besoinaide
     */
    public function setBesoinAide($besoinaide)
    {
        $this->besoinaide = $besoinaide;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }


}