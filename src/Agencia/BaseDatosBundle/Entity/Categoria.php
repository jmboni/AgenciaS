<?php

namespace Agencia\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Agencia\BaseDatosBundle\Entity\Afiliados;
use Agencia\BaseDatosBundle\Entity\Trabajos;
//use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Agencia\BaseDatosBundle\Entity\Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false, unique=true)
     */
    private $nombre;

    /**
     * @var \DateTime $creado
     *
     * @ORM\Column(name="creado", type="datetime")
     */
    private $creado;

    /**
     * @var \DateTime $actualizado
     *
     * @ORM\Column(name="actualizado", type="datetime")
     */
    private $actualizado;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->creado = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersistEvent() {
        $this->actualizado = new \DateTime();

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
     * @ORM\OneToMany(targetEntity="Trabajos", mappedBy="categoria") 
     */
    protected $trabajo;
 
    /**
     * @ORM\ManyToMany(targetEntity="Afiliados",inversedBy="afiliado")
     * @ORM\JoinTable(name="categoria_afiliado", 
     *     joinColumns={@ORM\JoinColumn(name="categoria_id", referencedColumnName="id", onDelete="CASCADE")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="afiliado_id", referencedColumnName="id")}
     * )
     */
    protected $afiliado;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Categoria
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     * @return Categoria
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
     * @return Categoria
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
     * Add trabajo
     *
     * @param Agencia\BaseDatosBundle\Entity\Trabajos $trabajo
     * @return Categoria
     */
    public function addTrabajo(\Agencia\BaseDatosBundle\Entity\Trabajos $trabajo)
    {
        $this->trabajo[] = $trabajo;
    
        return $this;
    }

    /**
     * Remove trabajo
     *
     * @param Agencia\BaseDatosBundle\Entity\Trabajos $trabajo
     */
    public function removeTrabajo(\Agencia\BaseDatosBundle\Entity\Trabajos $trabajo)
    {
        $this->removeTrabajo($trabajo);
    }

    /**
     * Get trabajo
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }

    /**
     * Add afiliado
     *
     * @param Agencia\BaseDatosBundle\Entity\Afiliados $afiliado
     * @return Categoria
     */
    public function addAfiliado(\Agencia\BaseDatosBundle\Entity\Afiliados $afiliado)
    {
        $this->afiliado[] = $afiliado;
    
        return $this;
    }

    /**
     * Remove afiliado
     *
     * @param Agencia\BaseDatosBundle\Entity\Afiliados $afiliado
     */
    public function removeAfiliado(\Agencia\BaseDatosBundle\Entity\Afiliados $afiliado)
    {
        $this->afiliado->removeElement($afiliado);
    }

    /**
     * Get afiliado
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAfiliado()
    {
        return $this->afiliado;
    }

    public function __toString() {
        return $this->getNombre();
    }


}