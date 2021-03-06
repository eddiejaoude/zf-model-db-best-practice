<?php
/**
 * Mock Dao item successful
 */
class Test_Default_Model_Mock_Dao_ItemSuccess
    implements Default_Model_Dao_Interface, Default_Model_Dao_ItemInterface
{
    /**
     * @return Test_Default_Model_Mock_RepoSuccess
     */
    public function getDatasource()
    {
        return $this;
    }

    /**
     * Find by account id
     *
     * @param Default_Model_Entity_Account $account
     *
     * @return array
     */
    public function findByAccountId(Default_Model_Entity_Account $account)
    {
        $file = file_get_contents(APPLICATION_TESTS . '/default/models/mocks/daos/json/findByAccountId.json');
        $json = Zend_Json::decode($file, Zend_Json::TYPE_OBJECT);
        return $json;
    }


}