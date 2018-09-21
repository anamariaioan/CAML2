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
    public static const VOTE = "Your idea %s just got a vote. It has %s votes in total. GG!";

    public static const NEXT_MEETING = "Up next: %s Meeting.";

    public static const NEXT_COURSE = "Up next: %s Course.";

    private $constNotification;

    private $idNotification;

    private $idUser;

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
    public function getIdNotification()
    {
        return $this->idNotification;
    }

    /**
     * @param int $idNotification
     */
    public function setIdNotification($idNotification)
    {
        $this->idNotification = $idNotification;
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




}