<?php

namespace App\Controller;

use App\Entity\About;
use App\Entity\Information;
use App\Entity\Portfolio;
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

        if($information->getAbout() == null)
        {
            $about = new About();
            $information->setAbout($about);
            $em = $this->getDoctrine()->getManager();
            $em->persist($about);
            $information->setAbout($about);
            $em->persist($information);
            $em->flush();
        }

        if($information->getPortfolio() == null)
        {
            $portfolio = new Portfolio();
            $information->setPortfolio($portfolio);

            $em = $this->getDoctrine()->getManager();
            $em->persist($portfolio);
            $em->persist($information);
            $em->flush();
        }

        return $this->render('default/index.html.twig', array(
            'information' => $information
        ));
    }


}