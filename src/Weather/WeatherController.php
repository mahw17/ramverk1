<?php

namespace Mahw17\Weather;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

/**
 * Controller to handle user login.
 */
class WeatherController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;


    // Create and configure new db-object

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
        $ipObj = $this->di->get("ip");

        // Set navbar active
        $session->set('navbar', 'weather');

        // Collect data
        $currentIp = $ipObj->getIpAddress();

        $data = [
            "title" => "Väder | ramverk1",
            "intro_mount"   => 'Väder',
            "intro_path"    => 'formulär',
            "currentIp"     => $currentIp
        ];

        // Add and render views
        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/weather/form", $data, "main");

        return $page->render($data);
    }

    /**
     * Retrive posted form.
     *
     */
    public function indexActionPost() : object
    {
        // Load framework services
        $page = $this->di->get("page");
        $request = $this->di->get("request");
        $session = $this->di->get("session");
        $ipValidation = $this->di->get("ip");
        $weather = $this->di->get("weather");

        // Get IP-address
        $ipAddress = $request->getPost('ip', null);

        // Type of data (forecast/history)
        $weaterType = $request->getPost('weather', null);

        // Verify IP-address
        $results = $ipValidation->validateIp($ipAddress);

        // Fetch API-resultset (if IP is valid)
        $ipInfo = null;
        $weatherInfo = null;
        if ($results['valid']) {
            $ipInfo = $ipValidation->ipInfo($ipAddress);
            // Fetch data depending on user input (forecast/history)
            if ($weaterType === "forecast") {
                $weatherInfo = $weather->weatherForecast(["lat" => $ipInfo->latitude, "lon" => $ipInfo->longitude]);
            } else {
                $weatherInfo = $weather->weatherHistory(["lat" => $ipInfo->latitude, "lon" => $ipInfo->longitude]);
            }
        }

        // Set navbar active
        $session->set('navbar', 'weather');

        // Collect data
        $data = [
            "title"         => "Väder | ramverk1",
            "intro_mount"   => 'Prognos',
            "intro_path"    => 'resultat',
            "ip"            => $ipAddress,
            "results"       => $results,
            "ipInfo"        => $ipInfo,
            "weatherType"   => $weaterType,
            "weatherInfo"   => $weatherInfo
        ];

        // Add and render views
        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/weather/result", $data, "main");

        return $page->render($data);
    }
}
