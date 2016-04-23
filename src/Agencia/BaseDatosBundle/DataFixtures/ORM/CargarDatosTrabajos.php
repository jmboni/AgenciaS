<?php
namespace Agencia\BaseDatosBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Agencia\BaseDatosBundle\Entity\Trabajos;
use Symfony\Component\Validator\Constraints\DateTime;

class CargarDatosTrabajos extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {

         $trabajo_dsg = new Trabajos();
         $trabajo_dsg->setCategoria($em->merge($this->getReference("categoria-programacion")));
         $trabajo_dsg->setTipo('tiempo completo');
         $trabajo_dsg->setCompania('DSG Consultores');
         $trabajo_dsg->setLogo('sensio-labs.gif');
         $trabajo_dsg->setUrl('http://www.dsgconsultores.com/');
         $trabajo_dsg->setPosicion('Programador java');
         $trabajo_dsg->setLocalidad('Almeria, España');
         $trabajo_dsg->setDescripcion('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
         $trabajo_dsg->setHowToApply('Envia tu CV a dsg');
         $trabajo_dsg->setPublico(true);
         $trabajo_dsg->setActivado(true);
         $trabajo_dsg->setToken('trabajo_dsg');
         $trabajo_dsg->setEmail('colacacion@dsgconsultores.com');
         $trabajo_dsg->setFinaliza(new \DateTime('+30 days'));
         $job_aea = new Trabajos();
         $job_aea->setCategoria($em->merge($this->getReference("categoria-diseño")));
         $job_aea->setTipo('Freelance');
         $job_aea->setCompania('Asociacion de Estudios');
         $job_aea->setLogo('extreme-sensio.gif');
         $job_aea->setUrl('http://www.asoaciaion.com/');
         $job_aea->setPosicion('Diseñador grafico');
         $job_aea->setLocalidad('Almeria, España');
         $job_aea->setDescripcion('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
         $job_aea->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
         $job_aea->setPublico(true);
         $job_aea->setActivado(true);
         $job_aea->setToken('job_extreme_sensio');
         $job_aea->setEmail('job@example.com');
         $job_aea->setFinaliza(new \DateTime('+30 days'));

         $em->persist($trabajo_dsg);
         $em->persist($job_aea);
         $em->flush();
    }

    public function getOrder()
    {
        return 20; // the order in which fixtures will be loaded
    }
}