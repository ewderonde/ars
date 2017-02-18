<?php

/**
 * Created by PhpStorm.
 * User: Sven de Ronde
 * Date: 16-2-2017
 * Time: 21:10
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Coworker
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
     * @var \DateTime
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $addressNumber;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $bsn;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var CoworkerType
     */
    private $coworkerType;

    /**
     * @var float
     */
    private $wage;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var CoworkerHasTask[]
     */
    private $coworkerHasTasks;

    /**
     * @var Schedule[];
     */
    private $schedules;

    public function __construct()
    {
        $this->dateCreated = new \DateTime();
        $this->dateModified = new \DateTime();

        $this->coworkerHasTasks = new ArrayCollection();
        $this->schedules = new ArrayCollection();
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
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * @param string $addressNumber
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getBsn()
    {
        return $this->bsn;
    }

    /**
     * @param string $bsn
     */
    public function setBsn($bsn)
    {
        $this->bsn = $bsn;
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
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return CoworkerType
     */
    public function getCoworkerType()
    {
        return $this->coworkerType;
    }

    /**
     * @param CoworkerType $coworkerType
     */
    public function setCoworkerType($coworkerType)
    {
        $this->coworkerType = $coworkerType;
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
     * @return CoworkerHasTask[]
     */
    public function getCoworkerHasTasks()
    {
        return $this->coworkerHasTasks;
    }

    /**
     * @param CoworkerHasTask[] $coworkerTask
     */
    public function addCoworkerTask($coworkerTask)
    {
        $this->coworkerHasTasks[] = $coworkerTask;
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
        $this->schedules[] = $schedule;
    }
}