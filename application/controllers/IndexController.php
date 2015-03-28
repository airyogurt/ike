<?php

class IndexController extends Zend_Controller_Action
{

    public function indexAction()
    {
        $test = new Application_Model_mapper_TestMapper();
        $this->view->test = $test->getTestData();
    }

}

