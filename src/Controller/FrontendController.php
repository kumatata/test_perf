<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;


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
     * @Route("/slow-expensive", name="slow_expensive", methods={"GET"})
     */
    public function slowExpensive(CityRepository $cityRepository): Response
    {
        echo "Wait......5 SECONDES EH OUI...";
        sleep(5);
        return $this->render('frontend/slow_expensive.html.twig', [ 'cities' => $cityRepository->findAll()]);
    }
}
