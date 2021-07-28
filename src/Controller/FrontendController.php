<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\ElectMunicipale; 
use App\Repository\ElectMunicipaleRepository; 
use ApiPlatform\Core\Annotation\ApiResource;


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

    public function getData()
    {

        return $this->render('frontend/get.html.twig');
    }


    /**
     * @Route("/getLoadsData")
     */

    public function getLoadsData( )
    {       
        return $this->render('frontend/getloadsdata.html.twig');
    }
    
    
}
