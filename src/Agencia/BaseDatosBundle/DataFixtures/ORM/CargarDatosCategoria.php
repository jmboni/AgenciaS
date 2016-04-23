<?php
namespace Agencia\BaseDatosBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Agencia\BaseDatosBundle\Entity\Categoria;

class CargarDatosCategoria extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $disenno = new Categoria();
        $disenno->setNombre('Diseño');

        $programacion = new Categoria();
        $programacion->setNombre('Programación');

        $restauracion = new Categoria();
        $restauracion->setNombre('Restauración');

        $construccion = new Categoria();
        $construccion->setNombre('Construcción');

        $em->persist($disenno);
        $em->persist($programacion);
        $em->persist($restauracion);
        $em->persist($construccion);
        $em->flush();

        $this->addReference('categoria-diseño', $disenno);
        $this->addReference('categoria-programacion', $programacion);
        $this->addReference('categoria-restauración', $restauracion);
        $this->addReference('categoria-construcción', $construccion);
    }

    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }
}