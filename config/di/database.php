<?php
/**
 * Creating the session as a $di service.
 */
return [
    // Services to add to the container.
    "services" => [
        "db" => [
            "shared" => true,
            "callback" => function () {
                $db = new \Anax\Database\DatabaseConfigure(); //added by mahw17

                // Load the configuration files
                $cfg = $this->get("configuration");
                $config = $cfg->load("database.php");
                $config = $config["config"] ?? null;

                $db->configure($config);

                return $db;
            }
        ],
    ],
];
