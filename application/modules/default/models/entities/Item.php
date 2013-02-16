<?php
/**
* Account entity
*/
class Default_Model_Entity_Item extends Default_Model_Entity_Core
{

    /**
    * Id
    *
    * @var int
    */
    private $_id;

    /**
    * Title
    *
    * @var string
    */
    private $_title;

    /**
    * Description
    *
    * @var string
    */
    private $_description;

    /**
    * Set Id
    *
    * @param int $id
    *
    * @return Default_Model_Entity_User
    */
    public function setId($id)
    {
        $this->_id = (int)$id;

        return $this;
    }

    /**
    * Get Id
    *
    * @param void
    *
    * @return int
    */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param string $title
     *
     * @return Default_Model_Entity_Item
     */
    public function setTitle($title)
    {
        $this->_title = (string)$title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param string $description
     *
     * @return Default_Model_Entity_Item
     */
    public function setDescription($description)
    {
        $this->_description = (string)$description;

        return $this;
    }

}