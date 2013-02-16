<?php
/**
 * Account entity
 */
class Default_Model_Entity_Account extends Default_Model_Entity_Core
{

    /**
     * Id
     *
     * @var string
     */
    private $_id;

    /**
     * Name
     *
     * @var string
     */
    private $_name;

    /**
     * Email
     *
     * @var string
     */
    private $_email;

    /**
     * Items collection
     *
     * @var array
     */
    private $_items = array();

    /**
     * Set Id
     *
     * @param int $id
     *
     * @return Github_Model_Entity_User
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
     * Set items
     *
     * @param array $items
     *
     * @return Default_Model_Entity_User
     */
    public function setItems(array $items)
    {
        $this->_items = $items;

        return $this;
    }

    /**
     * Add item
     *
     * @param Default_Model_Entity_Item $item
     *
     * @return Default_Model_Entity_Account
     */
    public function addRepo(Default_Model_Entity_Item $item)
    {
        $this->_items[$item->getId()] = $item;

        return $this;
    }

    /**
     * Get items
     *
     * @param void
     *
     * @return array
     */
    public function getItems()
    {
        return $this->_items;
    }

    /**
     * Get name
     *
     * @param void
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Github_Model_Entity_Account
     */
    public function setName($name)
    {
        $this->_name = (string)$name;

        return $this;
    }

    /**
     * Get email
     *
     * @param void
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Github_Model_Entity_Account
     */
    public function setEmail($email)
    {
        $this->_email = (string)$email;

        return $this;
    }

}