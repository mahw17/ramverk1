<?php

namespace Mahw17\Ip;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

/**
 * Controller to handle requests to ip.
 */
class IpController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;


    /**
     * Handle req to ip/index with GET
     *
     * @return object to render
     */
    public function indexActionGet() : object
    {

        // Load framework services
        $page       = $this->di->get("page");
        $session    = $this->di->get("session");
        $ipObj      = $this->di->get("ip");

        // Set navbar active
        $session->set('navbar', 'ip');

        // Collect data
        // IP-address for application user
        $currentIp = $ipObj->getIpAddress();

        $data = [
            "title" => "IP | ramverk1",
            "intro_mount"   => 'IP-validering',
            "intro_path"    => 'formulär',
            "currentIp"     => $currentIp
        ];

        // Add and render views
        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/ip/form", $data, "main");

        return $page->render($data);
    }

    /**
     * Handle req to ip/index with POST
     *
     * @return object to render with the results
     */
    public function indexActionPost() : object
    {
        // Load framework services
        $page           = $this->di->get("page");
        $request        = $this->di->get("request");
        $session        = $this->di->get("session");
        $ipValidation   = $this->di->get("ip");

        // Get ip-adress
        $ipAddress = $request->getPost('ip', null);

        // Collect data
        $results = $ipValidation->validateIp($ipAddress);

        $info = null;
        if ($results['valid']) {
            $info = $ipValidation->ipInfo($ipAddress);
        }

        // Set navbar active
        $session->set('navbar', 'ip');

        // Collect data
        $data = [
            "title" => "IP | ramverk1",
            "intro_mount" => 'IP-validering',
            "intro_path" => 'resultat',
            "ip" => $ipAddress,
            "results" => $results,
            "info" => $info
        ];

        // Add and render views
        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/ip/result", $data, "main");

        return $page->render($data);
    }
}