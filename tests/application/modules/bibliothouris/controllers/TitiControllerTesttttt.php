<?php

class Bibliothouris_TitiControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{
    //protected $application;
    public function setUp() {
        //$this->bootstrap = array($this, 'appBootstrap');
        //parent::setUp();
        $this->bootstrap = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
        parent::setUp();
    }

//    public function appBootstrap() {
//        $this->application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
//        $this->application->bootstrap();
//    }

    public function testCanDoUnitTest()
    {
        $this->dispatch('/bibliothouris/courses/index/');
        //$this->assertController('user');
        //$this->assertAction('index');
        //$this->assertTrue(true);
        //$this->assertQueryCount('form#loginForm', 1);
        $this->assertQueryContentContains('h1', 'Courses List');//true

    }
}



