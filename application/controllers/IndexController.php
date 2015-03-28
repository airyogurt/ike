<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {


        $test = new Application_Model_mapper_TestMapper();
        $this->view->test = $test->getTestData();
    }

    public function indexAction()
    {
        // action body
    }

    public function indexfsdfsdfsdn()
    {
        // action body
    }


}

