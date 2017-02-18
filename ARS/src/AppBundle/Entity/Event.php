<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 21:10
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Event
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
     * @var \DateTime
     */
    private $employeeStartingTime;

    /**
     * @var integer
     */
    private $guests;

    /**
     * @var string
     */
    private $description;

    /**]
     * @var Schedule[]
     */
    private $schedules;

    /**
     * @var EventHasType[]
     */
    private $eventHasTypes;

    /**
     * @var User
     */
    private $manager;

    public function __construct()
    {
        $this->schedules = new ArrayCollection();
        $this->eventHasTypes = new ArrayCollection();
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
     * @return \DateTime
     */
    public function getEmployeeStartingTime()
    {
        return $this->employeeStartingTime;
    }

    /**
     * @param \DateTime $employeeStartingTime
     */
    public function setEmployeeStartingTime($employeeStartingTime)
    {
        $this->employeeStartingTime = $employeeStartingTime;
    }

    /**
     * @return int
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param int $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return Schedule[]
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * @param Schedule[] $schedule
     */
    public function addSchedule($schedule)
    {
        $this->schedules = $schedule;
    }

    /**
     * @return EventHasType[]
     */
    public function getEventHasTypes()
    {
        return $this->eventHasTypes;
    }

    /**
     * @param EventHasType[] $eventType
     */
    public function addEventType($eventType)
    {
        $this->eventHasTypes = $eventType;
    }

    /**
     * @return User
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param User $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }
}