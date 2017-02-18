<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 21:10
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Schedule
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $timeStart;

    /**
     * @var \DateTime
     */
    private $timeEnd;

    /**
     * @var float
     */
    private $wage;

    /**
     * @var integer
     */
    private $minutes;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var ScheduleHasLocation[]
     */
    private $scheduleHasLocations;

    /**
     * @var Event
     */
    private $event;

    /**
     * @var Task
     */
    private $task;

    /**
     * @var Coworker
     */
    private $coworker;

    public function __construct()
    {
        $this->scheduleHasLocations = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * @param \DateTime $timeStart
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;
    }

    /**
     * @return \DateTime
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * @param \DateTime $timeEnd
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return Task
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param Task $task
     */
    public function setTask($task)
    {
        $this->task = $task;
    }

    /**
     * @return Coworker
     */
    public function getCoworker()
    {
        return $this->coworker;
    }

    /**
     * @param Coworker $coworker
     */
    public function setCoworker($coworker)
    {
        $this->coworker = $coworker;
    }

    /**
     * @return float
     */
    public function getWage()
    {
        return $this->wage;
    }

    /**
     * @param float $wage
     */
    public function setWage($wage)
    {
        $this->wage = $wage;
    }

    /**
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * @param int $minutes
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTime $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param \DateTime $dateModified
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }

    /**
     * @return ScheduleHasLocation[]
     */
    public function getScheduleHasLocations()
    {
        return $this->scheduleHasLocations;
    }

    /**
     * @param ScheduleHasLocation[] $scheduleHasLocation
     */
    public function addScheduleHasLocation($scheduleHasLocation)
    {
        $this->scheduleHasLocations = $scheduleHasLocation;
    }
}