<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="")
 * @ORM\Table(name="example")
 */
class Example
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
     private $fstring;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
     private $fdecinal;

    /**
     * @ORM\Column(type="text")
     */
     private $ftext;

    /**
     * @ORM\Column(type="integer")
     */
     private $finteger;
    
    /**
     * @ORM\Column(type="boolean")
     */
     private $fboolean;

    /**
     * @ORM\Column(type="datetime")
     */
     private $fdatetime;
    

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
     * Set fstring
     *
     * @param string $fstring
     *
     * @return Example
     */
    public function setFstring($fstring)
    {
        $this->fstring = $fstring;

        return $this;
    }

    /**
     * Get fstring
     *
     * @return string
     */
    public function getFstring()
    {
        return $this->fstring;
    }

    /**
     * Set fdecinal
     *
     * @param string $fdecinal
     *
     * @return Example
     */
    public function setFdecinal($fdecinal)
    {
        $this->fdecinal = $fdecinal;

        return $this;
    }

    /**
     * Get fdecinal
     *
     * @return string
     */
    public function getFdecinal()
    {
        return $this->fdecinal;
    }

    /**
     * Set ftext
     *
     * @param string $ftext
     *
     * @return Example
     */
    public function setFtext($ftext)
    {
        $this->ftext = $ftext;

        return $this;
    }

    /**
     * Get ftext
     *
     * @return string
     */
    public function getFtext()
    {
        return $this->ftext;
    }

    /**
     * Set finteger
     *
     * @param integer $finteger
     *
     * @return Example
     */
    public function setFinteger($finteger)
    {
        $this->finteger = $finteger;

        return $this;
    }

    /**
     * Get finteger
     *
     * @return integer
     */
    public function getFinteger()
    {
        return $this->finteger;
    }

    /**
     * Set fboolean
     *
     * @param boolean $fboolean
     *
     * @return Example
     */
    public function setFboolean($fboolean)
    {
        $this->fboolean = $fboolean;

        return $this;
    }

    /**
     * Get fboolean
     *
     * @return boolean
     */
    public function getFboolean()
    {
        return $this->fboolean;
    }

    /**
     * Set fdatetime
     *
     * @param \DateTime $fdatetime
     *
     * @return Example
     */
    public function setFdatetime($fdatetime)
    {
        $this->fdatetime = $fdatetime;

        return $this;
    }

    /**
     * Get fdatetime
     *
     * @return \DateTime
     */
    public function getFdatetime()
    {
        return $this->fdatetime;
    }
}
