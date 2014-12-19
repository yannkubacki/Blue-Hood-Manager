<?php

namespace BHM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\AsseticBundle\Controller\AsseticController;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BHMCoreBundle:Default:index.html.twig');
    }

    public function dashboardAction()
    {
        return $this->render('BHMCoreBundle:Default:dashboard.html.twig');
    }
}
