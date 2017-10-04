<?php

namespace UserBundle\Entity;

/**
 * UserGraduation
 */
class UserGraduation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $instituteName;

    /**
     * @var \UserBundle\Entity\Graduation
     */
    private $graduation;

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
     * Set instituteName
     *
     * @param string $instituteName
     *
     * @return UserGraduation
     */
    public function setInstituteName($instituteName)
    {
        $this->instituteName = $instituteName;

        return $this;
    }

    /**
     * Get instituteName
     *
     * @return string
     */
    public function getInstituteName()
    {
        return $this->instituteName;
    }

    /**
     * Set graduation
     *
     * @param \UserBundle\Entity\Graduation $graduation
     *
     * @return UserGraduation
     */
    public function setGraduation(\UserBundle\Entity\Graduation $graduation = null)
    {
        $this->graduation = $graduation;

       $graduation->setUser($this);        
        
        return $this;
    }

    /**
     * Get graduation
     *
     * @return \UserBundle\Entity\Graduation
     */
    public function getGraduation()
    {
        return $this->graduation;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return UserGraduation
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

