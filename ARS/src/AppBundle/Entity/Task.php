<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 22:14
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Task
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Schedule[]
     */
    private $schedules;

    /**
     * @var
     */
    private $coworkerHasTasks;

    public function __construct()
    {
        $this->schedules = new ArrayCollection();
        $this->coworkerHasTasks = new ArrayCollection();
    }

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return mixed
     */
    public function getCoworkerHasTasks()
    {
        return $this->coworkerHasTasks;
    }

    /**
     * @param mixed $coworkerHasTask
     */
    public function addCoworkerHasTask($coworkerHasTask)
    {
        $this->coworkerHasTasks = $coworkerHasTask;
    }
}