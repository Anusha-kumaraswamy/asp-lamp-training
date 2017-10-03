<?php

namespace UserBundle\Entity;

/**
 * User
 */
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
     * @var \DateTime
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $loginName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $emailIds;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mobileNumbers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $education;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $interests;

    /**
     * @var \UserBundle\Entity\BloodGroup
     */
    private $bloodGroup;

    /**
     * @var \UserBundle\Entity\Gender
     */
    private $gender;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->emailIds = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mobileNumbers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->education = new \Doctrine\Common\Collections\ArrayCollection();
        $this->interests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return User
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set loginName
     *
     * @param string $loginName
     *
     * @return User
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;

        return $this;
    }

    /**
     * Get loginName
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Add emailId
     *
     * @param \UserBundle\Entity\UserMailAddress $emailId
     *
     * @return User
     */
    public function addEmailId(\UserBundle\Entity\UserMailAddress $emailId)
    {
        $this->emailIds[] = $emailId;
        $emailId->setUser($this);
        return $this;
    }

    /**
     * Remove emailId
     *
     * @param \UserBundle\Entity\UserMailAddress $emailId
     */
    public function removeEmailId(\UserBundle\Entity\UserMailAddress $emailId)
    {
        $this->emailIds->removeElement($emailId);
    }

    /**
     * Get emailIds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmailIds()
    {
        return $this->emailIds;
    }

    /**
     * Add mobileNumber
     *
     * @param \UserBundle\Entity\UserContactNumber $mobileNumber
     *
     * @return User
     */
    public function addMobileNumber(\UserBundle\Entity\UserContactNumber $mobileNumber)
    {
        $this->mobileNumbers[] = $mobileNumber;
        $mobileNumber->setUser($this);
        return $this;
    }

    /**
     * Remove mobileNumber
     *
     * @param \UserBundle\Entity\UserContactNumber $mobileNumber
     */
    public function removeMobileNumber(\UserBundle\Entity\UserContactNumber $mobileNumber)
    {
        $this->mobileNumbers->removeElement($mobileNumber);
    }

    /**
     * Get mobileNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMobileNumbers()
    {
        return $this->mobileNumbers;
    }

    /**
     * Add education
     *
     * @param \UserBundle\Entity\UserGraduation $education
     *
     * @return User
     */
    public function addEducation(\UserBundle\Entity\UserGraduation $education)
    {
        $this->education[] = $education;
        $education->setUser($this);
        return $this;
    }

    /**
     * Remove education
     *
     * @param \UserBundle\Entity\UserGraduation $education
     */
    public function removeEducation(\UserBundle\Entity\UserGraduation $education)
    {
        $this->education->removeElement($education);
    }

    /**
     * Get education
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Add interest
     *
     * @param \UserBundle\Entity\UserAreaOfInterest $interest
     *
     * @return User
     */
    public function addInterest(\UserBundle\Entity\UserAreaOfInterest $interest)
    {
        $this->interests[] = $interest;
        $interest->setUser($this);
        return $this;
    }

    /**
     * Remove interest
     *
     * @param \UserBundle\Entity\UserAreaOfInterest $interest
     */
    public function removeInterest(\UserBundle\Entity\UserAreaOfInterest $interest)
    {
        $this->interests->removeElement($interest);
    }

    /**
     * Get interests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * Set bloodGroup
     *
     * @param \UserBundle\Entity\BloodGroup $bloodGroup
     *
     * @return User
     */
    public function setBloodGroup(\UserBundle\Entity\BloodGroup $bloodGroup = null)
    {
        $this->bloodGroup = $bloodGroup;

        return $this;
    }

    /**
     * Get bloodGroup
     *
     * @return \UserBundle\Entity\BloodGroup
     */
    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    /**
     * Set gender
     *
     * @param \UserBundle\Entity\Gender $gender
     *
     * @return User
     */
    public function setGender(\UserBundle\Entity\Gender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return \UserBundle\Entity\Gender
     */
    public function getGender()
    {
        return $this->gender;
    }
}
