<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 17-2-2017
 * Time: 00:48
 */
namespace AppBundle\Entity;

class CoworkerType
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
     * @var integer
     */
    private $type;

    /**
     * @var Coworker[]
     */
    private $coworkers;

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
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return Coworker[]
     */
    public function getCoworkers()
    {
        return $this->coworkers;
    }

    /**
     * @param Coworker[] $coworkers
     */
    public function addCoworker($coworker)
    {
        $this->coworkers[] = $coworker;
    }
}