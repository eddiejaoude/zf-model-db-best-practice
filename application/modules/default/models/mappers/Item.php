<?php

/**
 * Item mapper
 *
 * @package Default
 */
class Default_Model_Mapper_Item extends Default_Model_Mapper_Core
{

    /**
     * Find by Account Id
     *
     * @param Default_Model_Entity_Account $account
     *
     * @return Default_Model_Entity_Account
     */
    public function findByAccountId(Default_Model_Entity_Account $account)
    {
        $rows = $this->getDao()->findByAccountId($account);

        if (0 == count($rows)) {
            return;
        }

        $items = array();
        foreach ($rows as $k=>$v) {
            $item = new Default_Model_Entity_Item;
            $item->setId($v->id)
                ->setTitle($v->title)
                ->setDescription($v->description);
            $items[$v->id] = $item;
        }
        $account->setItems($items);

        return $account;
    }

}
