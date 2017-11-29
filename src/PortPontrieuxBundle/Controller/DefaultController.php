<?php

namespace PortPontrieuxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortPontrieuxBundle:Accueil:index.html.twig');
    }
    public function tarifAction()
    {
        return $this->render('PortPontrieuxBundle:Tarifs:index.html.twig');
    }
}
