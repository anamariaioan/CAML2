<?php
/**
 * Created by PhpStorm.
 * User: cosmin.pavel
 * Date: 8/10/2018
 * Time: 2:39 PM
 */

namespace Service;

use PDO;

class RatingLoader
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getRating()
    {
        $statement = $this->pdo->prepare('SELECT * FROM rating_traking');
        $statement->execute();

        $ratingArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $ratingArray;
    }

}