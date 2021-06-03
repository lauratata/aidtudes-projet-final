<?php
require_once ('utilisateur.php');
require_once ('chatprive.php');

class photos implements JsonSerializable
{
    private $id = 0;

    private $photos= array();

    public function __construct($id = 0)
    {
        $this->id = $id;
    }

    public function getId() {return $this->id;}

    public function getPhotos() {return $this->photos;}

    public function setId($id) {$this->id = $id;}
    /**
     * @param array $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
