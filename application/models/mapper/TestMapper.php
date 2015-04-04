<?php

class Application_Model_mapper_TestMapper extends Application_Model_Db_testdb
{

    public function getTestData()
    {
        $dbAdapter = Zend_Db_Table::getDefaultAdapter();
        //$stmt = $dbAdapter->query('SELECT * FROM test')->fetchAll();

        $rows = $this->getDbTable()->fetchAll();
        $entries = array();
        foreach($rows as $row){
            $user = new Application_Model_Test();
            $user->setId($row->id);
            $user->setFirstname($row->firstname);

            $entries[] = $user;
        }

    return $entries;
}


}