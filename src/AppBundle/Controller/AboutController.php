<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends Controller
{
    /**
     * @Route("/about/{name}", name="about")
     */
    public function aboutAction($name)
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneByName($name);
        return $this->render('about/user.html.twig', [
            'user' => $user
        ]);
    }

    public function detailsAction($name)
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneByName($name);
        return $this->render('about/more.html.twig', [
            'user' => $user
        ]);
    }
}
