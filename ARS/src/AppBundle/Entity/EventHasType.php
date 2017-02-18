<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 22:15
 */
namespace AppBundle\Entity;

class EventHasType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Event
     */
    private $event;

    /**
     * @var EventType
     */
    private $eventType;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * @return EventType
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param EventType $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }
}