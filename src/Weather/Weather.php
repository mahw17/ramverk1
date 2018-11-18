<?php

namespace Mahw17\Weather;

/**
 * Weather class, get weather info based on coordinates
 */
class Weather
{

    /**
     * API KEY.
     */
    private $apiKey = null;

    /**
     * API URL.
     */
    private $apiUrl = null;

    /**
     * API EXTENSION.
     */
    private $apiExtension = null;

    /**
     * Constructor fetching api key and api url from specific supplier.
     *
     * @param array $config containing details for connecting to the supplier API.
     */
    public function __construct($config)
    {
        $this->apiKey       = $config['darksky']['apiKey'];
        $this->apiUrl       = $config['darksky']['apiUrl'];
        $this->apiExtension = $config['darksky']['apiExtension'];
    }


    /**
     * Fetch weather forecast
     *
     * @param array coordinates
     *
     * @return array
     */
    public function weatherForecast($coordinates = ["lat" => 57, "lon" => 18])
    {
        // Default value on return attributes
        $url    = $this->apiUrl . $this->apiKey . '/' . $coordinates["lat"] . "," . $coordinates["lon"] . $this->apiExtension;

        // Get response
        $result = file_get_contents($url);
        $result = json_decode($result);

        // Collect and return results
        return $result;
    }

    /**
     * Fetch weather forecast
     *
     * @param array coordinates
     *
     * @return array
     */
    public function weatherHistory($coordinates = ["lat" => 57, "lon" => 18])
    {
        // Default value on return attributes
        $stopTime = time();
        $startTime = time() - (3 * 24 * 60 * 60);
        while ($stopTime >= $startTime) {
            $url    = $this->apiUrl . $this->apiKey . '/' . $coordinates["lat"] . "," . $coordinates["lon"] . "," . $stopTime . $this->apiExtension;
            $stopTime = $stopTime - (24 * 60 * 60);
        }

        // Get response
        $result = file_get_contents($url);
        $result = json_decode($result);

        // Collect and return results
        return $result;
    }


}
