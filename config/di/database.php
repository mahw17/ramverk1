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

                // Load the configuration files
                $cfg = $this->get("configuration");
                $config = $cfg->load("database.php");
                $config = $config["config"] ?? null;

                // Create and configure new db-object
                $db = new \Anax\Database\Database($config);

                return $db;
            }
        ],
    ],
];
