<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 22:15
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class EventType
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
     * @var EventHasType[]
     */
    private $eventHasTypes;

    public function __construct()
    {
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
     * @return EventHasType[]
     */
    public function getEventHasTypes()
    {
        return $this->eventHasTypes;
    }

    /**
     * @param EventHasType[] $eventHasType
     */
    public function addEventHasType($eventHasType)
    {
        $this->eventHasTypes = $eventHasType;
    }
}