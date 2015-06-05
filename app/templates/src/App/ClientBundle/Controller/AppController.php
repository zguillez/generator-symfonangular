<?php

namespace App\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\ClientBundle\Service;

class AppController extends Controller
{
	public function homeAction()
	{
		$common = $this->container->get('common');
		$test = $common->getTest();
		return $this->render('AppClientBundle:Page:home.html.twig', array('pagina1' => 'pag_1_1', 'pagina2' => 'pag_1_2'));
	}
}