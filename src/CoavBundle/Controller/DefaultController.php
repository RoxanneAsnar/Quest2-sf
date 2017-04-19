<?php

namespace CoavBundle\Controller;

use CoavBundle\Entity\Terrain;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Coav/default/index.html.twig');
    }

    public function AddAction(Request $request)
    {

        $terrain1 = new Terrain();
        $terrain1->setName('St Exupéry');
        $terrain1->setIcao('8907');
        $terrain1->setLatitude(5);
        $terrain1->setLongitude(5);
        $terrain1->setCity('lyon');
        $terrain1->setCountry('france');

        $terrain2 = new Terrain();
        $terrain2->setName('Charles de Gaulle');
        $terrain2->setIcao('PU9F');
        $terrain2->setLatitude(907809);
        $terrain2->setLongitude(696060);
        $terrain2->setCity('Paris');
        $terrain2->setCountry('France');

        $em = $this->getDoctrine()->getManager();
        $em->persist($terrain1);
        $em->persist($terrain2);
        $em->flush();

        return $this->render('@Coav/terrain/show.html.twig', [
            'terrain' => $terrain1,
            'terrain2' => $terrain2,
        ]);
    }
}
