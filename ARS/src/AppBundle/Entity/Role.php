<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 22:15
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Role
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
     * @var UserHasRole[]
     */
    private $userHasRoles;

    public function __construct()
    {
        $this->userHasRoles = new ArrayCollection();
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
     * @return UserHasRole[]
     */
    public function getUserHasRoles()
    {
        return $this->userHasRoles;
    }

    /**
     * @param UserHasRole[] $userHasRole
     */
    public function addUserHasRole($userHasRole)
    {
        $this->userHasRoles = $userHasRole;
    }
}