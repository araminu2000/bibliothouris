<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initAutoloader() {
        Zend_Loader_Autoloader::getInstance()->registerNamespace('ErrLib');

    }

	protected function _initFront() {
        $this->_frontController = Zend_Controller_Front::getInstance();
        $this->_frontController->registerPlugin(new ErrLib_Controller_Plugin_OverideErrorModule());
    }

	protected function _initPlaceholders() {

        $this->bootstrap('layout');
        $layout=$this->getResource('layout');
        $view=$layout->getView();
        $view->strictVars();


        #jquery UI CSS
        $view->headLink()->appendStylesheet('/common/jquery-ui/css/custom-theme/jquery-ui-1.10.1.custom.css');
        #jquery / jquery UI
        $view->headScript()->prependFile('/common/jquery-ui/js/jquery-1.9.1.js');
        $view->headScript()->appendFile('/common/jquery-ui/js/jquery-ui-1.10.1.custom.min.js');
        #datatable CSS
        $view->headLink()->appendStylesheet('/common/datatable/media/css/jquery.dataTables.css');
        $view->headLink()->appendStylesheet('/common/datatable/media/css/jquery.dataTables_themeroller.css');
        #datatable JS
        $view->headScript()->appendFile('/common/datatable/media/js/jquery.dataTables.js');

        $view->headTitle()
            ->setSeparator(' - ');
    }
}

