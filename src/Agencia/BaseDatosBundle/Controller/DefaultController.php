<?php

namespace Agencia\BaseDatosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AgenciaBaseDatosBundle:Default:index.html.twig', array('name' => $name));
    }
}
