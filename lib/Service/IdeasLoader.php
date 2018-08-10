<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 25.07.2018
 * Time: 16:11
 */

namespace Service;

use PDO;


class IdeasLoader
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getIdeas()
    {
        $statement = $this->pdo->prepare('SELECT * FROM ideas');
        $statement->execute();

        $ideasArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $ideasArray;
    }

}