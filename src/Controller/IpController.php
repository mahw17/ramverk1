<?php

namespace Mahw17\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

/**
 * Controller to handle user login.
 */
class IpController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    /**
     * Display the about page.
     *
     * @return object
     */
    public function indexActionGet() : object
    {

        // Load framework services
        $page = $this->di->get("page");
        $session = $this->di->get("session");

        // Set navbar active
        $session->set('navbar', 'ip');

        // Collect data
        $data = [
            "title" => "IP | ramverk1",
            "intro_mount" => 'IP-validering',
            "intro_path" => 'formulär'
        ];

        // Add and render views
        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/ip/form", $data, "main");

        return $page->render($data);
    }

    /**
     * User verification.
     *
     */
    public function indexActionPost() : object
    {
        // Load framework services
        $page = $this->di->get("page");
        $request = $this->di->get("request");
        $session = $this->di->get("session");

        // Get ip-adress
        $ipAddress = $request->getPost('ip', null);

        // Verify ip
        $ipValidation = new \Mahw17\Ip\Ip;
        $results = $ipValidation->validateIp($ipAddress);

        // Set navbar active
        $session->set('navbar', 'ip');

        // Collect data
        $data = [
            "title" => "IP | ramverk1",
            "intro_mount" => 'IP-validering',
            "intro_path" => 'resultat',
            "ip" => $ipAddress,
            "valid" => $results['valid'],
            "ipType" => $results['ipType'],
            "hostname" => $results['hostname']
        ];

        // Add and render views
        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/ip/result", $data, "main");

        return $page->render($data);
    }
}
