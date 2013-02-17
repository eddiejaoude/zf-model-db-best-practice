<?php

/**
 * Default model service core
 *
 * @author  Eddie Jaoude
 * @package Default
 */
abstract class Default_Model_Service_Core
{

    /**
     * Mapper
     *
     * @var Default_Model_Mapper_Interface
     */
    protected $_mapper;

    /**
     * Constructor
     *
     * Mapper is optional as can be injected via setMapper method
     *
     * @param Default_Model_Mapper_Interface|null $mapper
     */
    public function __construct(Default_Model_Mapper_Interface $mapper = null)
    {
        if (!empty($mapper)) {
            $this->setMapper($mapper);
        }
    }

    /**
     * Get mapper
     *
     * @throws Default_Model_Service_Exception_NoMapper
     * @internal param $void
     *
     * @return Default_Model_Mapper_Interface
     */
    public function getMapper()
    {
        if (empty($this->_mapper)) {
            throw new Default_Model_Service_Exception_NoMapper('No Mapper available. Use $service->setMapper($mapper)');
        }
        return $this->_mapper;
    }

    /**
     * Set mapper
     *
     * @param Default_Model_Mapper_Interface $mapper
     *
     * @return Default_Model_Service_Core
     */
    public function setMapper(Default_Model_Mapper_Interface $mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }

}