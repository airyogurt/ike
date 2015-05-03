<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
  protected function _initViewSuffix()
  {
      Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer')->setViewSuffix('html');
  }
}
