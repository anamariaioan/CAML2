<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 11.07.2018
 * Time: 17:38
 */

namespace Service;


use Model\Notification;

class PdoContainer
{
    private $pdo;

    public function __construct(array $configuration)
    {
        if ($this->pdo === null) {
            $this->pdo = new \PDO(
                $configuration['db_dsn'],
                $configuration['db_user'],
                $configuration['db_pass']
            );

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
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

        $statement = $this->pdo->prepare("INSERT INTO ideas(user_id_author, idea_type, title, description) VALUES ('1', '{$ideaType}' , '{$ideaTitle}' , '{$ideaDescription}')");

        return $statement->execute();
    }

    public function selectIdeaId()
    {
        $statement  = $this->pdo->query("SELECT id FROM ideas ORDER BY id DESC LIMIT 1");

        return $statement->fetch();
    }

    public function insertVotesForIdea($ideaIdObj)
    {
        $ideaId = $ideaIdObj['id'];

        $statement = $this->pdo->prepare("INSERT INTO votes(id_idea, votes_count) VALUES ('{$ideaId}', 0)");

        return $statement->execute();
    }

    public function getUsernameLogin()
    {
        $new_user = new LoginUsers($this->pdo);

        return $new_user->getuser();
    }

    public function getVotesForIdea($idIdea)
    {
        $statement = $this->pdo->query("SELECT votes_count FROM votes WHERE id_idea = {$idIdea}");

        $votesCount = $statement->fetch();

        return $votesCount['votes_count'];
    }

    public function incrementVotes($idIdea)
    {
        $statement = $this->pdo->prepare("UPDATE votes SET votes_count = votes_count + 1 WHERE id_idea = {$idIdea}");

        return $statement->execute();
    }

    public function getIdeaNameById($idIdea)
    {
        $statement = $this->pdo->query("SELECT title FROM ideas WHERE id = {$idIdea}");

        return $statement->fetch();
    }

    public function addNotificationForVotes($idIdea)
    {
        $constNotification = Notification::VOTE;

        $user_id = 1;

        $valueNotification = $this->getIdeaNameById($idIdea);

        $valueNotification2 = $this->getVotesForIdea($idIdea);

        $status = Notification::STATUS_ACTIVE;

        $statement = $this->pdo->prepare("INSERT INTO notification_user(const_notification, value_notification, value_notification2, id_user, event_type, id_event, status) VALUES ('{$constNotification}', '{$valueNotification['title']}', '{$valueNotification2}', '{$user_id}', '3', '{$idIdea}', '{$status}') ");

        return $statement->execute();

    }

    public function addrating()
    {



    }

}