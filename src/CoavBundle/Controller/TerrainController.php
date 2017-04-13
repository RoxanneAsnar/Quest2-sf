<?php

namespace CoavBundle\Controller;

use CoavBundle\Entity\Terrain;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Terrain controller.
 *
 */
class TerrainController extends Controller
{
    /**
     * Lists all terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $terrains = $em->getRepository('CoavBundle:Terrain')->findAll();

        return $this->render('@Coav/terrain/show.html.twig', array(
            'terrains' => $terrains,
        ));
    }

    /**
     * Add elements to the terrain entity (database) to have something to show
     *
     */

    public function AddAction(Terrain $terrain)
    {
        return $this->render('@Coav/terrain/show.html.twig', array(
            'terrain' => $terrain,
        ));
    }

    /**
     * Finds and displays a terrain entity.
     *
     */
    public function showAction(Terrain $terrain)
    {
        return $this->render('@Coav/terrain/show.html.twig', array(
            'terrain' => $terrain,
        ));
    }

}
