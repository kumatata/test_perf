<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Controller to render a basic "homepage".
 */
class FrontendController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(SerializerInterface $serializer)
    {

        return $this->render('frontend/homepage.html.twig', [
            'user' => $serializer->serialize($this->getUser(), 'jsonld')
        ]);
    }

    /**
     * @Route("/getData")
     */

    public function getData(SerializerInterface $serializer)
    {

        return $this->render('frontend/get.html.twig', [
            'user' => $serializer->serialize($this->getUser(), 'jsonld')
        ]);
    }


    /**
     * @Route("/getSlowData")
     */

    public function getSlowData(SerializerInterface $serializer)
    {

        

        return $this->render('frontend/get.html.twig', [
            'user' => $serializer->serialize($this->getUser(), 'jsonld')
        ]);
    }
    
    
}
