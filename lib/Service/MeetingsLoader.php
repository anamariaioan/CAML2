<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 17.07.2018
 * Time: 20:21
 */

namespace Service;

use PDO;


class MeetingsLoader
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getMeetings()
    {
        $statement = $this->pdo->prepare('SELECT * FROM meetings');
        $statement->execute();

        $meetingsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $meetingsArray;
    }

}