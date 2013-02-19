<?php
/**
 * Mock Dao item no result
 */
class Test_Default_Model_Mock_Dao_ItemNoResults
    implements Default_Model_Dao_Interface, Default_Model_Dao_ItemInterface
{

    /**
     * @return Test_Default_Model_Mock_RepoSuccess
     */
    public function getDatasource()
    {
        return $this;
    }

    public function findByAccountId(Default_Model_Entity_Account $user)
    {
        $file = file_get_contents(APPLICATION_TESTS . '/default/models/mocks/daos/json/noResults.json');
        $json = Zend_Json::decode($file, Zend_Json::TYPE_OBJECT);
        return $json;
    }


}