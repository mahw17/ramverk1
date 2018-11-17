<?php

namespace Mahw17\Ip;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the IPController.
 */
class IpControllerTest extends TestCase
{

    // Create the di container.
    protected $di;
    protected $controller;

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
    }


    /**
     * Test the route "index - get".
     */
    public function testIndexActionGet()
    {
        // Do the test and assert it
        $res = $this->controller->indexActionGet();
        $this->assertContains("IP-validering", $res->getBody());
    }

    /**
     * Test the route "index - post".
     */
    public function testIndexActionPost()
    {

        // Do the test and assert it
        $array = [
            "post" => [
                "ip" => "2001:6b0:1::200"
            ]
        ];
        $this->di->get("request")->setGlobals($array);
        $posted = $this->di->get("request")->getPost("ip");
        $this->assertEquals($posted, "2001:6b0:1::200");
        $res = $this->controller->indexActionPost();
        $this->assertContains("IP-validering", $res->getBody());
    }
}
