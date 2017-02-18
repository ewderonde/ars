<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 22:15
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Location
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $location;

    /**
     * @var ScheduleHasLocation[]
     */
    private $scheduleHasLocations;

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
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
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