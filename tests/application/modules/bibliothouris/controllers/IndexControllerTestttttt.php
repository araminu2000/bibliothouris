<?php

class Bibliothouris_IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{


    public function setUp()
    {
        $this->bootstrap = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
        parent::setUp();
    }

    public function testIndexAction()
    {


       $cont = new Bibliothouris_CoursesController();
        die;
		echo 'BibliothourisIndexIndex';//die;
        $params = array('action' => 'index', 'controller' => 'Index', 'module' => 'default');
        //$urlParams = $this->urlizeOptions($params);

        $url = 'http://www1.courses.ro/bibliothouris/courses/index/';//$this->url($urlParams);
        $this->dispatch($url);
        print_r($this);
        die;
        // assertions
        $this->assertModule($urlParams['module']);
        $this->assertController($urlParams['controller']);
        $this->assertAction($urlParams['action']);
        $this->assertQueryContentContains("div#welcome h3", "This is your project's main page");

    }


}



