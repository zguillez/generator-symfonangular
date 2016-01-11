<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {
	public function indexAction(Request $request) {
		$common = $this->container->get('common');
		$test = $common->getTest();

		return $this->render('AppBundle:page:home.html.twig', [
			'title' => $test,
			'intro' => $this->get('translator')->trans('intro'),
		]);
	}
}
