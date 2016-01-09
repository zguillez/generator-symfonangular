<?php

namespace App\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
	public function indexAction()
	{
		return $this->render('AppServerBundle:Page:index.html.twig');
	}
}
