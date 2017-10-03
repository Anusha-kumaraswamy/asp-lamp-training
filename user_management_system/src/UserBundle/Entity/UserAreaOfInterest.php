<?php

namespace UserBundle\Entity;

/**
 * UserAreaOfInterest
 */
class UserAreaOfInterest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \UserBundle\Entity\AreaOfInterest
     */
    private $areaOfInterest;

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
     * Set areaOfInterest
     *
     * @param \UserBundle\Entity\AreaOfInterest $areaOfInterest
     *
     * @return UserAreaOfInterest
     */
    public function setAreaOfInterest(\UserBundle\Entity\AreaOfInterest $areaOfInterest = null)
    {
        $this->areaOfInterest = $areaOfInterest;

        return $this;
    }

    /**
     * Get areaOfInterest
     *
     * @return \UserBundle\Entity\AreaOfInterest
     */
    public function getAreaOfInterest()
    {
        return $this->areaOfInterest;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return UserAreaOfInterest
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

