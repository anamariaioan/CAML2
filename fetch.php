<?php
/**
 * Created by PhpStorm.
 * User: anamaria.ioan
 * Date: 01.10.2018
 * Time: 16:37
 */

require __DIR__ . "/dosar.php";

use Service\PdoContainer;

$container = new PdoContainer($configuration);

$notifications = $container->getNotificationsLoader($idUser = 1);
$output = [];


foreach ($notifications as $notification) {
    $output[] = sprintf($notification["const_notification"], $notification["value_notification"], $notification["value_notification2"]);
}

$count = count($notifications);

if ($count == 0) {
    $output[] = 'No new notifications';
}

$data = [
    'notifications' => $output,
    'unseen_notifications' => $count
];

echo json_encode($data);
