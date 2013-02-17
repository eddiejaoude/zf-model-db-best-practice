<?php
/**
 * Class Test_Default_Model_Mock_RepoSuccess
 */
class Test_Default_Model_Mock_Mapper_ItemSuccess
    implements Default_Model_Mapper_Interface
{
    /**
     * @return Test_Default_Model_Mock_RepoSuccess
     */
    public function getDao() {
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
        $account = new Default_Model_Entity_Account;
        $account->setId(2);

        for ($i=0;$i<5;$i++) {
            $item = new Default_Model_Entity_Item;
            $item->setId($i)
                ->setTitle('title ' . $i)
                ->setDescription('description ' . $i);

            $account->addRepo($item);
        }

        return $account;
    }


}