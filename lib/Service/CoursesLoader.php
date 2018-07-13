<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 13.07.2018
 * Time: 13:53
 */

namespace Service;

use PDO;


class CoursesLoader
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCourses()
    {
        $statement = $this->pdo->prepare('SELECT * FROM courses');
        $statement->execute();

        $coursesArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $coursesArray;
    }


}