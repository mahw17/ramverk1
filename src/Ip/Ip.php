<?php

namespace Mahw17\Ip;

/**
 * To ease rendering a page consisting of several views.
 */
class Ip
{

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
}
