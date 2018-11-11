<?php

namespace Mahw17\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class IpControllerTest extends TestCase
{

    // Create the di container.
    protected $di;
    protected $controller;

    // public function initialize()
    // {
    //     $this->setUp();
    // }

    /**
     * Prepare before each test.
     */
    protected function setUp()
    {
        global $di;

        // Setup di
        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // View helpers uses the global $di so it needs its value
        $di = $this->di;

        // Setup the controller
        $this->controller = new IpController();
        $this->controller->setDI($this->di);
        //$this->controller->initialize();
    }


    /**
     * Test the route "dump-di".
     */
    public function testIndexActionGet()
    {
        // Do the test and assert it
        $res = $this->controller->indexActionGet();
        $this->assertContains("IP-validering", $res->getBody());
    }

    /**
     * Test the route "dump-di".
     */
    public function testIndexActionPost()
    {
        // Do the test and assert it
        $res = $this->controller->indexActionPost();
        $this->assertContains("IP-validering", $res->getBody());
    }
}
