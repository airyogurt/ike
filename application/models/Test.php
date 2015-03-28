<?php

class Application_Model_Test extends Zend_Db_Table_Abstract
{
    /** Table name */
    protected $_name = 'test';

    private $id;
    private $firstname;
    private $lastname;

    public function getId() {
        return $this->id;
    }

}