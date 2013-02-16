<?php

/**
 * Item service
 *
 * @author  Eddie Jaoude
 * @package Default
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
    public function findByUsernameId($id)
    {
        if (empty($id)) {
            throw new Default_Model_Service_Exception_Empty('$id is required & cannot be empty.');
        }

        $acccountEntity = new Default_Model_Entity_Account();
        $acccountEntity->setId($id);

        $account = $this->getMapper()->findByUsernameId($acccountEntity);
        return $account;
    }



}