<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 22:12
 */
namespace AppBundle\Entity;

class CoworkerHasTask
{
    /**
     * @var Coworker
     */
    private $coworker;

    /**
     * @var Task
     */
    private $task;

    public function __construct()
    {
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


}