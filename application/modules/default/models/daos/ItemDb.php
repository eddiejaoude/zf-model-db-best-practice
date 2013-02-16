<?php
/**
 * Item DAO
 *
 * @package default
 */
class Default_Model_Dao_ItemDb extends Zend_Db_Table_Abstract implements Default_Model_Dao_Interface, Default_Model_Dao_ItemInterface {

    /**
     * Table name
     *
     * @var string
     */
    protected $_name    = 'items';

    /**
     * @var Zend_Db_Table_Abstract
     */
    public $_datasource;

    /**
     * Get datasource
     *
     * @return Default_Model_Dao_Interface
     */
    public function getDatasource() {
        return $this;
    }

    /**
     * @param Default_Model_Entity_Account $account
     *
     * @internal param $username
     *
     * @return Default_Model_Entity_Account
     */
    public function findByAccountId(Default_Model_Entity_Account $account) {

        $select = $this->select()
            ->where('account_id = :account_id')
            ->bind(array(':account_id' => $account->getId()));
        $result = $this->getDatasource()->fetchAll($select);

        return $result;
    }






}