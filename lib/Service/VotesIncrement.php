<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 10.08.2018
 * Time: 14:39
 */

namespace Service;


class VotesIncrement
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function incrementVotes($idIdea)
    {
        $statement = $this->pdo->prepare("UPDATE votes SET votes_count = votes_count + 1 where id_idea = {$idIdea}");

        return $statement->execute();
    }


}