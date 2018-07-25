<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 11.07.2018
 * Time: 17:38
 */

namespace Service;

use PDO;

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

    public function getIdeasLoader()
    {
        $ideasLoader = new IdeasLoader($this->pdo);

        return $ideasLoader->getIdeas();
    }


    public function insertIdea($array)
    {
        $ideaType = $array['ideaType'];
        $ideaTitle = $array['ideaTitle'];
        $ideaDescription = $array['ideaDescription'];

        $statement = $this->pdo->prepare("INSERT INTO ideas(author, idea_type, title, description, votes) VALUES ('Meri', '{$ideaType}' , '{$ideaTitle}' , '{$ideaDescription}',0)");

        return $statement->execute();
    }

}