<?php

namespace Sata\SampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $welcome = $this->container->getParameter('sata_sample.welcome');

        return $this->render(
            'SataSampleBundle:Default:index.html.twig',
            [
                'welcome' => $welcome
            ]
        );
    }
}
