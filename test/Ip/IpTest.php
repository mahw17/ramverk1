<?php

namespace Mahw17\Ip;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the User class.
 */
class IpTest extends TestCase
{
    // Create the di container.
    protected $di;
    protected $ipObj;


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

        // Load the configuration files
        $cfg = $this->di->get("configuration");
        $config = $cfg->load("apikey.php");
        $config = $config["config"] ?? null;

        // Create and configure new ip-object
        $this->ipObj = new \Mahw17\IP\Ip($config);
    }

    /**
     * Test the method testValidateIpV4.
     */
    public function testValidateIpV4()
    {
        $res = $this->ipObj->validateIp('194.103.20.10');
        $this->assertContains("kjell", $res['hostname']);
    }

    /**
     * Test the method testValidateIpV6.
     */
    public function testValidateIpV6()
    {
        $res = $this->ipObj->validateIp('2001:6b0:1::200');
        $this->assertContains("kth", $res['hostname']);
    }

    /**
     * Test the method testValidateIpNok
     */
    public function testValidateIpNok()
    {
        $res = $this->ipObj->validateIp('194.103.20.A');
        $this->assertFalse($res['valid']);
    }
}
