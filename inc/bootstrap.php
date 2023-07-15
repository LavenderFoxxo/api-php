<?php

define("PROJECT_ROOT_PATH", dirname(__FILE__) . "/../");

require PROJECT_ROOT_PATH . "/vendor/autoload.php";

require_once PROJECT_ROOT_PATH . "/inc/config.php";

require_once PROJECT_ROOT_PATH . "/Controllers/BaseController.php";

$dotenv = Dotenv\Dotenv::createImmutable(PROJECT_ROOT_PATH);

$dotenv->load();

?>
