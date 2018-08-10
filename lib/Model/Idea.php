<?php
/**
 * Created by PhpStorm.
 * User: anamaria
 * Date: 11.07.2018
 * Time: 16:15
 */

namespace Model;

class Idea
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $ideaType;

    /**
     * @var string
     */
    private $ideaName;

    /**
     * @var string
     */
    private $ideaDescription;

    /**
     * @var int
     */
    private $nrVotes;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getIdeaType()
    {
        return $this->ideaType;
    }

    /**
     * @param string $ideaType
     */
    public function setIdeaType($ideaType)
    {
        $this->ideaType = $ideaType;
    }

    /**
     * @return string
     */
    public function getIdeaName()
    {
        return $this->ideaName;
    }

    /**
     * @param string $ideaName
     */
    public function setIdeaName($ideaName)
    {
        $this->ideaName = $ideaName;
    }

    /**
     * @return string
     */
    public function getIdeaDescription()
    {
        return $this->ideaDescription;
    }

    /**
     * @param string $ideaDescription
     */
    public function setIdeaDescription($ideaDescription)
    {
        $this->ideaDescription = $ideaDescription;
    }

    /**
     * @return int
     */
    public function getNrVotes()
    {
        return $this->nrVotes;
    }

    /**
     * @param int $nrVotes
     */
    public function setNrVotes($nrVotes)
    {
        $this->nrVotes = $nrVotes;
    }
}
