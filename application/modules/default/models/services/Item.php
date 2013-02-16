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
     * @throws Github_Model_Service_Exception_Empty
     * @internal param string $id
     *
     * @return Default_Model_Entity_Item
     */
    public function findByUsernameId($id)
    {
        if (empty($id)) {
            throw new Github_Model_Service_Exception_Empty('$username is required & cannot be empty.');
        }

        $userEntity = new Github_Model_Entity_User();
        $userEntity->setId($id);

        $user = $this->getMapper()->findByUsernameId($userEntity);
        return $user;
    }



}