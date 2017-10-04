<?php

namespace UserBundle\Entity;

/**
 * UserContactNumber
 */
class UserContactNumber
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var \UserBundle\Entity\User
     */
    private $user;


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
     * Set number
     *
     * @param integer $number
     *
     * @return UserContactNumber
     */
    public function setNumber($number)
    {
        $this->number = $number;

        $number->setUser($this);        
        
        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return UserContactNumber
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

