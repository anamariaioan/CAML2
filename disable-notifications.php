<?php
/**
 * Created by PhpStorm.
 * User: anamaria.ioan
 * Date: 05.10.2018
 * Time: 21:46
 */

require __DIR__ . "/dosar.php";

use Service\PdoContainer;

$container = new PdoContainer($configuration);

return $container->setStatusInactiveOnNotifications();
