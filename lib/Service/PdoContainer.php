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

    public function getNotificationsLoader($idUser)
    {
        $notificationsLoader = new NotificationsLoader($this->pdo);

        return $notificationsLoader->getNotifications($idUser);
    }

    public function insertIdea($array)
    {
        $ideaType = $array['ideaType'];
        $ideaTitle = $array['ideaTitle'];
        $ideaDescription = $array['ideaDescription'];

        $statement = $this->pdo->prepare("INSERT INTO ideas(user_id_author, idea_type, title, description) VALUES ('1', :idea_type , :idea_title , :idea_description)");

        $statement->bindParam(':idea_type', $ideaType);
        $statement->bindParam(':idea_title', $ideaTitle);
        $statement->bindParam(':idea_description', $ideaDescription);

        $statement->execute();
    }

    public function selectIdeaId()
    {
        $statement = $this->pdo->query("SELECT id FROM ideas ORDER BY id DESC LIMIT 1");

        return $statement->fetch();
    }

    public function insertVotesForIdea($ideaIdObj)
    {
        $ideaId = $ideaIdObj['id'];

        $statement = $this->pdo->prepare("INSERT INTO votes(id_idea, votes_count) VALUES (:idea_id, 0)");

        $statement->execute(['id_idea' => $ideaId]);
    }

    public function getUsernameLogin()
    {
        $new_user = new LoginUsers($this->pdo);

        return $new_user->getuser();
    }

    public function getVotesForIdea($idIdea)
    {
        $statement = $this->pdo->prepare("SELECT votes_count FROM votes WHERE id_idea=:id_idea");

        $statement->execute(['id_idea' => $idIdea]);

        $votesCount = $statement->fetch();

        return $votesCount['votes_count'];
    }

    public function incrementVotes($idIdea)
    {
        $statement = $this->pdo->prepare("UPDATE votes SET votes_count = votes_count + 1 WHERE id_idea = :id_idea");

        $statement->bindParam(':id_idea', $idIdea);

        $statement->execute();
    }

    public function getIdeaNameById($idIdea)
    {
        $statement = $this->pdo->prepare("SELECT title FROM ideas WHERE id = :id_idea");

        $statement->execute(['id_idea' => $idIdea]);

        return $statement->fetch();
    }

    public function addNotificationForVotes($idIdea)
    {
        $constNotification = Notification::VOTE;

        $userId = 1;

        $valueNotification = $this->getIdeaNameById($idIdea);

        $valueNotification = $valueNotification['title'];

        $valueNotification2 = $this->getVotesForIdea($idIdea);

        $eventType = 3;

        $status = Notification::STATUS_ACTIVE;

        $statement = $this->pdo->prepare(
            "INSERT INTO notification_user
                        (const_notification, value_notification, value_notification2, id_user, event_type, id_event, status) 
                      VALUES 
                        (:const_notification , :value_notification , :value_notification_2 , :user_id , :event_type , :event_id , :status)");

        $statement->bindParam(':const_notification', $constNotification);
        $statement->bindParam(':value_notification', $valueNotification);
        $statement->bindParam(':value_notification_2', $valueNotification2);
        $statement->bindParam(':user_id', $userId);
        $statement->bindParam(':event_type', $eventType);
        $statement->bindParam(':event_id', $idIdea);
        $statement->bindParam(':status', $status);

        $statement->execute();
    }

    public function setStatusInactiveOnNotifications()
    {
        $statement = $this->pdo->prepare("UPDATE notification_user SET status = 0 WHERE status = 1");

        return $statement->execute();
    }
}
