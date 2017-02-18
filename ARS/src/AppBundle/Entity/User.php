<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 22:15
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var Event[]
     */
    private $events;

    /**
     * @var UserHasRole[]
     */
    private $userHasRoles;

    public function __construct()
    {
        $this->events = new ArrayCollection();
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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event[] $event
     */
    public function addEvent($event)
    {
        $this->events = $event;
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
    public function addUserHasRoles($userHasRole)
    {
        $this->userHasRoles = $userHasRole;
    }
}