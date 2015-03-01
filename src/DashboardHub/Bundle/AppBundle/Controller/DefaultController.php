<?php

namespace DashboardHub\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package DashboardHub\Bundle\AppBundle\Controller
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DashboardHubAppBundle:Default:index.html.twig');
    }
}
