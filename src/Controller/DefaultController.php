<?php

namespace App\Controller;

use App\Entity\About;
use App\Entity\Contact;
use App\Entity\Information;
use App\Entity\Portfolio;
use App\Entity\WorkCategory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

        $workCategories = $this->getDoctrine()->getRepository(WorkCategory::class)->findAll();

        $contact = new Contact();

        # Add form fields
        $form = $this->createFormBuilder($contact)
            ->add('name', TextType::class, array('label'=> true, 'attr' => array('class' => 'form-control', 'placeholder' => 'Votre nom')))
            ->add('email', TextType::class, array('label'=> 'Email','attr' => array('class' => 'form-control', 'placeholder' => 'Email')))
            ->add('subject', TextType::class, array('label'=> 'Sujet','attr' => array('class' => 'form-control', 'placeholder' => 'Sujet')))
            ->add('message', TextareaType::class, array('label'=> 'Message','attr' => array('class' => 'form-control', 'placeholder' => 'Message')))
            ->getForm();

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

        if($form->isSubmitted() &&  $form->isValid()) {

            $name = $form['name']->getData();
            $email = $form['email']->getData();
            $subject = $form['subject']->getData();
            $message = $form['message']->getData();

            # set form data

            $contact->setName($name);
            $contact->setEmail($email);
            $contact->setSubject($subject);
            $contact->setMessage($message);

            # finally add data in database

            $sn = $this->getDoctrine()->getManager();
            $sn->persist($contact);
            $sn->flush();

            $mail = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom('contact@mariane-erard.fr','Contact')
                ->setTo($information->getEmail())
                ->setBody($this->renderView('administration/sendemail.html.twig',array('name' => $name, 'email' => $email, 'message' => $message)),'text/html');

            $this->get('mailer')->send($mail);

        }

        return $this->render('default/index.html.twig', array(
            'information' => $information,
            'workCategories' => $workCategories,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/testLws", name="testLws")
     */
    public function testLwsAction()
    {
        $information = $this->getDoctrine()->getRepository(Information::class)->findOrCreateOne();

        $workCategories = $this->getDoctrine()->getRepository(WorkCategory::class)->findAll();

        $contact = new Contact();

        # Add form fields
        $form = $this->createFormBuilder($contact)
            ->add('name', TextType::class, array('label'=> true, 'attr' => array('class' => 'form-control', 'placeholder' => 'Votre nom')))
            ->add('email', TextType::class, array('label'=> 'Email','attr' => array('class' => 'form-control', 'placeholder' => 'Email')))
            ->add('subject', TextType::class, array('label'=> 'Sujet','attr' => array('class' => 'form-control', 'placeholder' => 'Sujet')))
            ->add('message', TextareaType::class, array('label'=> 'Message','attr' => array('class' => 'form-control', 'placeholder' => 'Message')))
            ->getForm();

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

        if($form->isSubmitted() &&  $form->isValid()) {

            $name = $form['name']->getData();
            $email = $form['email']->getData();
            $subject = $form['subject']->getData();
            $message = $form['message']->getData();

            # set form data

            $contact->setName($name);
            $contact->setEmail($email);
            $contact->setSubject($subject);
            $contact->setMessage($message);

            # finally add data in database

            $sn = $this->getDoctrine()->getManager();
            $sn->persist($contact);
            $sn->flush();

            $mail = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom('contact@mariane-erard.fr','Contact')
                ->setTo($information->getEmail())
                ->setBody($this->renderView('administration/sendemail.html.twig',array('name' => $name, 'email' => $email, 'message' => $message)),'text/html');

            $this->get('mailer')->send($mail);

        }

        return $this->render('default/index-test.html.twig', array(
            'information' => $information,
            'workCategories' => $workCategories,
            'form' => $form->createView()
        ));
    }


}