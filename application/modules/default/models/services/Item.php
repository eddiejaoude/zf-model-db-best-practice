<?php

/**
 * Item service
 *
 * @package default
 */
class Default_Model_Service_Item extends Default_Model_Service_Core
{

    /**
     * Find by username id
     *
     * @param $id
     *
     * @throws Default_Model_Service_Exception_Empty
     * @internal param string $id
     *
     * @return Default_Model_Entity_Item
     */
    public function findByAccountId($id)
    {
        if (empty($id)) {
            throw new Default_Model_Service_Exception_Empty('$id is required & cannot be empty.');
        }

        $acccountEntity = new Default_Model_Entity_Account();
        $acccountEntity->setId($id);

        $account = $this->getMapper()->findByAccountId($acccountEntity);
        return $account;
    }



}