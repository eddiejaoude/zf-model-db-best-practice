<?php
/**
 * Class Default_Model_Dao_RepoInterface
 */
interface Default_Model_Dao_ItemInterface {

    /**
     * @param Default_Model_Entity_Account $account
     *
     * @return Default_Model_Entity_Account
     */
    public function findByAccountId(Default_Model_Entity_Account $account);

}