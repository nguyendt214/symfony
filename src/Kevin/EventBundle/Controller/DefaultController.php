<?php

namespace Kevin\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $count = null)
    {
        $em = $this->getDoctrine()->getManager();
        $re = $em->getRepository('EventBundle:Event')
            ->findOneBy(array(
                'name' => 'Kevin'
            ));
        return $this->render(
            'EventBundle:Default:index.html.twig',
            array(
                'name' => $name,
                'count' => $count,
                'event' => $re
            )
        );
    }
}
