<?php

class Application_Model_Test extends Zend_Db_Table_Abstract
{
    /** Table name */
    protected $_name = 'test';

    private $id;
    protected  $firstname;
    private $lastname;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

}