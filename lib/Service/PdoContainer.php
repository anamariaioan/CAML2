<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 11.07.2018
 * Time: 17:38
 */

namespace Service;

use PDO;
use Service\IdeaService;

class PdoContainer
{
    private $pdo;

    public function __construct(array $configuration)
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $configuration['db_dsn'],
                $configuration['db_user'],
                $configuration['db_pass']
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

    }

    public function getCoursesLoader()
    {
        $coursesLoader = new CoursesLoader($this->pdo);

        return $coursesLoader->getCourses();
    }

    public function insertIdea()
    {
        $insertIdea = new IdeaService();


    }

}