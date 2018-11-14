<?php
/**
 * Creating the session as a $di service.
 */
return [
    // Services to add to the container.
    "services" => [
        "ip" => [
            "shared" => true,
            "callback" => function () {

                // Load the configuration files
                $cfg = $this->get("configuration");
                $config = $cfg->load("apikey.php");
                $config = $config["config"] ?? null;

                // Create and configure new ip-object
                $ip = new \Mahw17\IP\Ip($config);

                return $ip;
            }
        ],
    ],
];
