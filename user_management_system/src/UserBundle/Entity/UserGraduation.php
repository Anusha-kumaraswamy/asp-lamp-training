<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGraduation
 *
 * @ORM\Table(name="user_graduation", indexes={@ORM\Index(name="fk_ix_user_id", columns={"user_id"}), @ORM\Index(name="fk_ix_graduation_id", columns={"graduation_id"})})
 * @ORM\Entity
 */
class UserGraduation
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
     * @var string
     *
     * @ORM\Column(name="institue_name", type="string", length=45, nullable=false)
     */
    private $institueName;

    /**
     * @var \Graduation
     *
     * @ORM\ManyToOne(targetEntity="Graduation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="graduation_id", referencedColumnName="id")
     * })
     */
    private $graduation;

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
     * Set institueName
     *
     * @param string $institueName
     *
     * @return UserGraduation
     */
    public function setInstitueName($institueName)
    {
        $this->institueName = $institueName;

        return $this;
    }

    /**
     * Get institueName
     *
     * @return string
     */
    public function getInstitueName()
    {
        return $this->institueName;
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
