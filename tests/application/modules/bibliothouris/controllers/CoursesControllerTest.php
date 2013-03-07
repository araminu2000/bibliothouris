<?php

class Bibliothouris_CoursesControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{

    public function setUp()
    {
        $this->bootstrap = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
        parent::setUp();
    }

    public function testIndexAction()
    {
		//echo 'BibliothourisCoursesIndex';//die;
       /* $params = array('action' => 'index', 'controller' => 'Index', 'module' => 'default');
        $urlParams = $this->urlizeOptions($params);
        $url = $this->url($urlParams);
        $this->dispatch($url);
        
        // assertions
        $this->assertModule($urlParams['module']);
        $this->assertController($urlParams['controller']);
        $this->assertAction($urlParams['action']);
        $this->assertQueryContentContains("div#welcome h3", "This is your project's main page");
		*/
    }

    public function testController()
    {
        #used to test info regarding page content

        $this->dispatch('/bibliothouris/courses/index/');
        //$this->assertController('user');
        //$this->assertAction('index');
        //$this->assertTrue(true);
        //$this->assertRoute('default');
        //$this->assertQueryCount('form#loginForm', 1);//test if contains one form with id loginForm
        //$this->assertQueryContentContains('h1', 'Courses List');//true
        $this->assertQuery('h1');#test if element exists


    }
    public function testHomePage()
    {
        $this->dispatch('/');
        // ...
    }


}



