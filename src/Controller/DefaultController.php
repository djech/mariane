<?php

namespace App\Controller;

use App\Entity\Information;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Created by PhpStorm.
 * User: jerome
 * Date: 17/10/18
 * Time: 10:54
 */

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {
        $information = $this->getDoctrine()->getRepository(Information::class)->findOrCreateOne();

        return $this->render('default/index.html.twig', array(
            'information' => $information
        ));
    }


}