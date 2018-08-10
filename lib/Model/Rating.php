<?php
/**
 * Created by PhpStorm.
 * User: cosmin.pavel
 * Date: 8/10/2018
 * Time: 1:50 PM
 */

namespace Model;


class Rating
{
    /** @var int */
    private $id;

    /**
     * @var int
     */
    private $userIdFeedback;

    /**
     * @var int
     */
    private $userRatingTeacher;

    /**
     * @var int
     */
    private $rating;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getUserIdFeedback()
    {
        return $this->userIdFeedback;
    }

    /**
     * @param int $userIdFeedback
     */
    public function setUserIdFeedback($userIdFeedback)
    {
        $this->userIdFeedback = $userIdFeedback;
    }

    /**
     * @return int
     */
    public function getUserRatingTeacher()
    {
        return $this->userRatingTeacher;
    }

    /**
     * @param int $userRatingTeacher
     */
    public function setUserRatingTeacher($userRatingTeacher)
    {
        $this->userRatingTeacher = $userRatingTeacher;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

}