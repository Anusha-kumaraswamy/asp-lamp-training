<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAreaOfInterest
 *
 * @ORM\Table(name="user_area_of_interest", indexes={@ORM\Index(name="fk_ix_user_id", columns={"user_id"}), @ORM\Index(name="fk_ix_interest_id", columns={"area_of_interest_id"})})
 * @ORM\Entity
 */
class UserAreaOfInterest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AreaOfInterest
     *
     * @ORM\ManyToOne(targetEntity="AreaOfInterest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_of_interest_id", referencedColumnName="id")
     * })
     */
    private $areaOfInterest;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
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
