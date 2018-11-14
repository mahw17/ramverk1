<?php

namespace Mahw17\Ip;

/**
 * To ease rendering a page consisting of several views.
 */
class Ip
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
     * Constructor fetching api key and api url from specific supplier.
     *
     * @param array $options containing details for connecting to the database.
     */
    public function __construct($config)
    {
        $this->apiKey = $config['ipstack']['apiKey'];
        $this->apiUrl = $config['ipstack']['apiUrl'];
    }

    /**
     * Set the view to be used for the layout.
     *
     * @param array $view configuration to create up the view.
     *
     * @return $this
     */
    public function validateIp($ipAddress)
    {
        // Default value on return attributes
        $valid      = false;
        $ipType    = false;
        $hostname   = false;

        // Check if IP is valid either as a IPV4 or an IPV6
        if (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            $valid      = true;
            $ipType    = 'IPV4';
        } elseif (filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            $valid      = true;
            $ipType    = 'IPV6';
        }

        // If IP valid get connected domain, if not null
        if ($valid) {
            $hostname = $ipAddress !== gethostbyaddr($ipAddress) ? gethostbyaddr($ipAddress) : null;
        }

        // Collect and return results
        $result = [
            "ipAddress" => $ipAddress,
            "valid"     => $valid,
            "ipType"    => $ipType,
            "hostname"  => $hostname
        ];
        return $result;
    }

    /**
     * Set the view to be used for the layout.
     *
     * @param array $view configuration to create up the view.
     *
     * @return $this
     */
    public function ipInfo($ipAddress)
    {
        // Default value on return attributes
        $url    = $this->apiUrl . $ipAddress . '?access_key=' . $this->apiKey;

        // Get response
        $result = file_get_contents($url);
        $result = json_decode($result);

        // Collect and return results
        return $result;
    }

    /**
     * Set the view to be used for the layout.
     *
     * @param array $view configuration to create up the view.
     *
     * @return $this
     */
    public function getIpAddress()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    return $ip;
                }
            }
        }
    }
}
