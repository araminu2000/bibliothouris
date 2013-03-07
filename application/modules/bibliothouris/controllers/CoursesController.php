<?php
class Bibliothouris_CoursesController extends Zend_Controller_Action {

    public function init() {
		$this->_helper->layout->setLayout('layout');
    }

    public function preDispatch() {

    }

    public function indexAction() {
		$this->view->headTitle()->headTitle('Courses list Title');
    }

	public function ajaxListAction() {
		$response = array();
		$response[] = array('code'=>12,'tite'=>'title1');
		$response[] = array('code'=>13,'tite'=>'title2');

		$this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
		echo $this->_helper->json($response, false);
    }


    public function postDispatch() {

    }
}
