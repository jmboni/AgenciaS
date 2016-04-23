<?php
namespace Agencia\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agencia\BaseDatosBundle\Entity\Afiliados
 *
 * @ORM\Table(name="afiliados")
 * @ORM\Entity
 */

class Afiliados{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $url;

    /** @ORM\Column(type="string", unique=true) */
    protected $email;  

    /** @ORM\Column(type="string", unique=true) */
    protected $token;  

    /** @ORM\Column(type="boolean") */
    protected $activado=0;  

    /** @ORM\Column(type="datetime") */
    protected $creado;

    /** @ORM\Column(type="datetime") */
    protected $actualizado;

    /**
     * @ORM\ManyToMany(targetEntity="Categoria", mappedBy="afiliados")
     */
    protected $categorias;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->creado = new DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersistEvent() {
        $this->actualizado = new DateTime();

        return $this;
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdateEvent() {
        $this->actualizado = new DateTime();

        return $this;
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
     * Set url
     *
     * @param string $url
     * @return Afiliados
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Afiliados
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Afiliados
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set activado
     *
     * @param boolean $activado
     * @return Afiliados
     */
    public function setActivado($activado)
    {
        $this->activado = $activado;
    
        return $this;
    }

    /**
     * Get activado
     *
     * @return boolean 
     */
    public function getActivado()
    {
        return $this->activado;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     * @return Afiliados
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;
    
        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime 
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Set actualizado
     *
     * @param \DateTime $actualizado
     * @return Afiliados
     */
    public function setActualizado($actualizado)
    {
        $this->actualizado = $actualizado;
    
        return $this;
    }

    /**
     * Get actualizado
     *
     * @return \DateTime 
     */
    public function getActualizado()
    {
        return $this->actualizado;
    }

    /**
     * Add categorias
     *
     * @param Agencia\BaseDatosBundle\Entity\Categoria $categorias
     * @return Afiliados
     */
    public function addCategoria(\Agencia\BaseDatosBundle\Entity\Categoria $categorias)
    {
        $this->categorias[] = $categorias;
    
        return $this;
    }

    /**
     * Remove categorias
     *
     * @param Agencia\BaseDatosBundle\Entity\Categoria $categorias
     */
    public function removeCategoria(\Agencia\BaseDatosBundle\Entity\Categoria $categorias)
    {
        $this->categorias->removeElement($categorias);
    }

    /**
     * Get categorias
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategorias()
    {
        return $this->categorias;
    }
}