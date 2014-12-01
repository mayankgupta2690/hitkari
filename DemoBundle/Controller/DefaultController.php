<?php

namespace Hitkari\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HitkariDemoBundle:Default:home.html.twig');
    }

	public function productAction()
    {
        return $this->render('HitkariDemoBundle:Default:product.html.twig');
    }

    public function contactusAction()
    {
        return $this->render('HitkariDemoBundle:Default:contactus.html.twig');
    }

    public function emailAction()
    {
    	$message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('send@example.com')
        ->setTo('mayankgupta2690@yahoo.com')
        ->setBody('hi user');
      	$this->get('mailer')->send($message);

    return $this->render('HitkariDemoBundle:Default:email.html.twig');
    }

}
