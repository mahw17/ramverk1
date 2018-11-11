<?php

namespace Mahw17\Ip;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class IpTest extends TestCase
{
    /**
     * Test the route "index".
     */
    public function testValidateIpV4()
    {
        $obj = new Ip();
        $res = $obj->validateIp('194.103.20.10');
        $this->assertContains("kjell", $res['hostname']);
    }

    /**
     * Test the route "index".
     */
    public function testValidateIpV6()
    {
        $obj = new Ip();
        $res = $obj->validateIp('2001:6b0:1::200');
        $this->assertContains("kth", $res['hostname']);
    }

    /**
     * Test the route "index".
     */
    public function testValidateIpNok()
    {
        $obj = new Ip();
        $res = $obj->validateIp('194.103.20.A');
        $this->assertFalse($res['valid']);
    }
}
