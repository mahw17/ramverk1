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
    public function indexActionPost()
    {
        // Load framework services
        $page = $this->di->get("page");
        $request = $this->di->get("request");
        $response = $this->di->get("response");
        $session = $this->di->get("session");
        $ipValidation = $this->di->get("ip");
        $weather = $this->di->get("weather");

        // Validate coord (from posted)
        $coord = $request->getPost('coord', null);
        $coord = $weather->validateCoord($coord);

        // If none valide coords by post check posted ip-address for coords
        if (!$coord) {
            $ipAddress = $request->getPost('ip', null);
            $coord = $ipValidation->validateCoord($ipAddress);
        }

        // If neither coords by post or thru the ip is valid
        if (!$coord) {
            // Error message!
            $response->redirect("error/weather");
            return false;
        }

        // Type of data (forecast/history)
        $weaterType = $request->getPost('weather', null);

        // Fetch API-resultset
        $weatherInfo = null;
        $day = time();
        if ($weaterType === "forecast") {
            $weatherInfo = $weather->weatherForecast($coord);
        } else {
            $weatherInfo = $weather->weatherHistory($day, $coord);
        }

        // Set navbar active
        $session->set('navbar', 'weather');

        // Collect data
        $data = [
            "title"         => "Väder | ramverk1",
            "intro_mount"   => 'Prognos',
            "intro_path"    => 'resultat',
            "weatherType"   => $weaterType,
            "weatherInfo"   => $weatherInfo
        ];

        // Add and render views
        $page->add("mahw17/intro/subintro", $data, "subintro");
        $page->add("mahw17/weather/result", $data, "main");

        return $page->render($data);
    }
}
