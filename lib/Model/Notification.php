<?php
/**
 * Created by PhpStorm.
 * User: anamaria.ioan
 * Date: 21.09.2018
 * Time: 15:32
 */

namespace Model;


class Notification
{
    public const VOTE = "Your idea %s just got a vote. It has %d votes in total. GG!";

    public const NEXT_MEETING = "Up next: %s Meeting.";

    public const NEXT_COURSE = "Up next: %s Course.";

    public const STATUS_ACTIVE = 1;

    public const STATUS_INACTIVE = 0;

    private $id;

    private $constNotification;

    private $valueNotification;

    private $valueNotification2;

    private $eventType;

    private $idEvent;

    private $idUser;

    private $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getConstNotification()
    {
        return $this->constNotification;
    }

    /**
     * @param string $constNotification
     */
    public function setConstNotification($constNotification)
    {
        $this->constNotification = $constNotification;
    }

    /**
     * @return int
     */
    public function getValueNotification()
    {
        return $this->valueNotification;
    }

    /**
     * @param int $valueNotification
     */
    public function setValueNotification($valueNotification)
    {
        $this->valueNotification = $valueNotification;
    }

    /**
     * @return mixed
     */
    public function getValueNotification2()
    {
        return $this->valueNotification2;
    }

    /**
     * @param mixed $valueNotification2
     */
    public function setValueNotification2($valueNotification2): void
    {
        $this->valueNotification2 = $valueNotification2;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param mixed $eventType
     */
    public function setEventType($eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param mixed $idEvent
     */
    public function setIdEvent($idEvent): void
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

}
