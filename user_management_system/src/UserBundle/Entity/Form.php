<?php
namespace UserBundle\Entity;

class Form
{
    protected $loginName;
    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;
    protected $bloodGroup;
    protected $gender;
    protected $graduation;
    protected $areaOfInterest;
    protected $emailIds;
    protected $contactNumbers;
    

    public function getLoginName()
    {
        return $this->loginName;
    }

    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
    
    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    public function setBloodGroup($bloodGroup)
    {
        $this->bloodGroup = $bloodGroup;
    }
    
    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    public function getGraduation()
    {
        return $this->graduation;
    }

    public function setGraduation($graduation)
    {
        $this->graduation = $graduation;
    }
    
    public function getareaOfInterest()
    {
        return $this->areaOfInterest;
    }

    public function setAreaOfInterest($areaOfInterest)
    {
        $this->areaOfInterest = $areaOfInterest;
    }
    
    public function getEmailIds()
    {
        return $this->emailIds;
    }

    public function setEmailIds($emailIDs)
    {
        $this->emailIds = $emailIDs;
    }
    
    public function getContactNumbers()
    {
        return $this->contactNumbers;
    }

    public function setContactNumbers($contactNumbers)
    {
        $this->contactNumbers = $contactNumbers;
    }
}

