<?php

require_once(APPLICATION_TESTS . '/default/models/mocks/ItemNoResults.php');
class Test_Default_Model_Mapper_ItemNoResultsTest extends BaseTestCase {

    /**
     * Mapper object
     *
     * @author Eddie Jaoude
     * @param object $model
     *
     */
    private $_mapper;

    /**
     * Dao
     *
     * @var Test_Default_Model_Mock_ItemSuccess
     */
    private $_dao;

    /**
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
    public function setup() {
        $this->_dao = new Test_Default_Model_Mock_ItemNoResults();
        $this->_mock = $this->_dao->findByAccountId(new Default_Model_Entity_Account(array('id' => 2)));
        $this->_mapper = new Default_Model_Mapper_Item($this->_dao);
    }

    /**
     * Test object creation
     *
     * @author Eddie Jaoude
     * @param null
     * @return null
     *
     */
    public function testObjectInstance() {
        $this->assertEquals(true, is_object($this->_mapper));
    }

    /**
     * Find by username
     *
     * @author Eddie Jaoude
     * @param null
     * @return null
     *
     */
    public function testFindByAccountId() {
        $accountId = 2;
        $result = $this->_mapper->findByAccountId(new Default_Model_Entity_Account(array('id' => $accountId)));

        $this->assertEquals(true, is_object($result));
        $this->assertEquals(true, $result instanceof Default_Model_Entity_Account);
        $this->assertEquals(true, is_int($result->getId()));
        $this->assertEquals($accountId, $result->getId());
        $this->assertEquals(array(), $result->getItems());
        $this->assertEquals(0, count($result->getItems()));
    }

}

