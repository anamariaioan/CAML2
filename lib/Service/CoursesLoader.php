<?php
/**
 * Created by PhpStorm.
 * User: cosmin.pavel
 * Date: 8/10/2018
 * Time: 3:01 PM
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