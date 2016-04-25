<?php
namespace Agencia\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Agencia\BaseDatosBundle\Entity\Categoria;
use Agencia\BaseDatosBundle\Funciones\Ofertas;
use Agencia\BaseDatosBundle\Funciones\Amigable;


/**
 * Agencia\BaseDatosBundle\Entity\Trabajos
 *
 * @ORM\Table(name="trabajos")
 * @ORM\Entity
 */

class Trabajos{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    protected $id;

    /** @ORM\Column(type="string", nullable=true) */
    protected $tipo;

    /** @ORM\Column(type="string") */
    protected $compania;

    /** @ORM\Column(type="string", nullable=true) */
    protected $logo;

    /** @ORM\Column(type="string", nullable=true) */
    protected $url;

    /** @ORM\Column(type="string") */
    protected $posicion;

    /** @ORM\Column(type="string") */
    protected $localidad;

    /** @ORM\Column(type="text") */
    protected $descripcion;

    /** @ORM\Column(type="text") */
    protected $how_to_apply;

    /** @ORM\Column(type="string", unique=true) */
    protected $token;    

    /** @ORM\Column(type="boolean") */
    protected $publico=1;    

    /** @ORM\Column(type="boolean") */
    protected $activado=0;    

    /** @ORM\Column(type="string") */
    protected $email;

    /** @ORM\Column(type="datetime") */
    protected $finaliza;

    /** @ORM\Column(type="datetime") */
    protected $creado;

    /** @ORM\Column(type="datetime") */
    protected $actualizado;

    /** 
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="trabajo") 
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    protected $categoria;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->creado = new \DateTime();
        $this->actualizado =new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersistEvent() {
        $this->actualizado =new \DateTime();

        return $this;
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdateEvent() {
        $this->actualizado = new \DateTime();

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
     * Set tipo
     *
     * @param string $tipo
     * @return Trabajos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set compania
     *
     * @param string $compania
     * @return Trabajos
     */
    public function setCompania($compania)
    {
        $this->compania = $compania;
    
        return $this;
    }

    /**
     * Get compania
     *
     * @return string 
     */
    public function getCompania()
    {
        return $this->compania;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Trabajos
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Trabajos
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
     * Set posicion
     *
     * @param string $posicion
     * @return Trabajos
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    
        return $this;
    }

    /**
     * Get posicion
     *
     * @return string 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Trabajos
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Trabajos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set how_to_apply
     *
     * @param string $howToApply
     * @return Trabajos
     */
    public function setHowToApply($howToApply)
    {
        $this->how_to_apply = $howToApply;
    
        return $this;
    }

    /**
     * Get how_to_apply
     *
     * @return string 
     */
    public function getHowToApply()
    {
        return $this->how_to_apply;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Trabajos
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
     * Set publico
     *
     * @param boolean $publico
     * @return Trabajos
     */
    public function setPublico($publico)
    {
        $this->publico = $publico;
    
        return $this;
    }

    /**
     * Get publico
     *
     * @return boolean 
     */
    public function getPublico()
    {
        return $this->publico;
    }

    /**
     * Set activado
     *
     * @param boolean $activado
     * @return Trabajos
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
     * Set email
     *
     * @param string $email
     * @return Trabajos
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
     * Set finaliza
     *
     * @param \DateTime $finaliza
     * @return Trabajos
     */
    public function setFinaliza($finaliza)
    {
        $this->finaliza = $finaliza;
    
        return $this;
    }

    /**
     * Get finaliza
     *
     * @return \DateTime 
     */
    public function getFinaliza()
    {
        return $this->finaliza;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     * @return Trabajos
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
     * @return Trabajos
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
     * Set categoria
     *
     * @param Agencia\BaseDatosBundle\Entity\Categoria $categoria
     * @return Trabajos
     */
    public function setCategoria(\Agencia\BaseDatosBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return Agencia\BaseDatosBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function __toString() {
        return sprintf('%s at %s (%s)', $this->getPosicion(), $this->getCompania(), $this->getLocalidad());
    }

    // Añadimos estos métodos para hacer url amigables
    public function getCompaniaSlug()
    {
        return Amigable::urlAmigable($this->getCompania()); ;
    }

    public function getPosicionSlug()
    {
        return Amigable::urlAmigable($this->getPosicion());
    }

    public function getLocalidadSlug()
    {
        return Amigable::urlAmigable($this->getLocalidad());
    }
}