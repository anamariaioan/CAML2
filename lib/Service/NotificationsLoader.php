<?php
/**
 * Created by PhpStorm.
 * User: anamaria.ioan
 * Date: 25.09.2018
 * Time: 14:50
 */

namespace Service;

use PDO;


class NotificationsLoader
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getNotifications($idUser)
    {
        $statement = $this->pdo->prepare("SELECT * FROM notification_user WHERE id_user = :id_user AND status = 1");
        $statement->execute(['id_user' => $idUser]);

        $notificationsArray = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $notificationsArray;
    }
}
