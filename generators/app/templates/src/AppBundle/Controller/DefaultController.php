<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {
	/**
	 * @Route("/", name="_home")
	 */
	public function indexAction(Request $request) {
		return $this->render('AppBundle:page:home.html.twig', [
			'title' => 'Title from Symfony',
			'intro' => $this->get('translator')->trans('intro'),
		]);
	}
}
