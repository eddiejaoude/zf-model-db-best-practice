<?php
/**
 * Base mapper
 *
 * @author  Eddie Jaoude
 * @package Github
 */
abstract class Default_Model_Mapper_Core implements Default_Model_Mapper_Interface
{

    /**
     * DAO (web service, mock etc...)
     *
     * @var Default_Model_Dao_Interface
     */
    protected $_dao;

    /**
     * Constructor
     *
     * Dao is optional as can be injected via setDao method
     *
     * @param Default_Model_Dao_Interface|null $dao
     */
    public function __construct(Default_Model_Dao_Interface $dao = null)
    {
        if (!empty($dao)) {
            $this->setDao($dao);
        }
    }

    /**
     * Get dao
     *
     * @throws Default_Model_Mapper_Exception_NoDao
     * @internal param $void
     *
     * @return Default_Model_Dao_Interface
     */
    public function getDao()
    {
        if (empty($this->_dao)) {
            throw new Default_Model_Mapper_Exception_NoDao('No Dao available. Use $mapper->setDao($dao)');
        }
        return $this->_dao;
    }

    /**
     * Set dao
     *
     * @param Default_Model_Dao_Interface $dao
     *
     * @return Default_Model_Mapper_Core
     */
    public function setDao(Default_Model_Dao_Interface $dao)
    {
        $this->_dao = $dao;
        return $this;
    }



}