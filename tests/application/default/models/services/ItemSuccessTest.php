<?php
/**
 * Service item successful
 */
require_once(APPLICATION_TESTS . '/default/models/mocks/mappers/ItemSuccess.php');
class Test_Default_Model_Service_ItemSuccessTest extends BaseTestCase {

    /**
     * Mapper object
     *
     * @author Eddie Jaoude
     * @param object $_mapper
     *
     */
    private $_mapper;

    /**
     * Service object
     *
     * @author Eddie Jaoude
     * @param object $_service
     *
     */
    private $_service;

    /**
     * Mock object
     *
     * @var array
     */
    private $_mock;

    /**
     * Initialisation of config object
     *
     * @author Eddie Jaoude
     * @param null
     * @return null
     *
     */
    public function setup()
    {
        $this->_mapper = new Test_Default_Model_Mock_Mapper_ItemSuccess();
        $this->_mock = $this->_mapper->findByAccountId(new Default_Model_Entity_Account());
        $this->_service = new Default_Model_Service_Item($this->_mapper);
    }

    /**
     * Test object creation
     *
     * @author Eddie Jaoude
     * @param null
     * @return null
     *
     */
    public function testObjectInstance()
    {
        $this->assertEquals(true, is_object($this->_service));
    }

    /**
     * Find by username
     *
     * @author Eddie Jaoude
     * @param null
     * @return null
     *
     */
    public function testFindByAccountId()
    {
        $accountId = 2;
        $result = $this->_service->findByAccountId($accountId);

        $this->assertEquals(true, is_object($result));
        $this->assertEquals(true, $result instanceof Default_Model_Entity_Account);
        $this->assertEquals(true, is_int($result->getId()));
        $this->assertEquals($accountId, $result->getId());

        $mock = $this->_mock->getItems();
        foreach ($result->getItems() as $k=>$v) {
            $this->assertEquals($mock[$k]->getId(), $v->getId());
            $this->assertEquals($mock[$k]->getTitle(), $v->getTitle());
            $this->assertEquals($mock[$k]->getDescription(), $v->getDescription());
        }


    }



}

