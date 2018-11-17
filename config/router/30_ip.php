<?php
/**
 * Load the ip controller.
 */
return [
    "routes" => [
        [
            "info" => "Validate IP.",
            "mount" => "ip",
            "handler" => "\Mahw17\Ip\IpController",
        ]
    ]
];
