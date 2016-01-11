<?php

namespace AppBundle\Service;

class CommonService {
	private $session;
	private $em;
	private $mailer;
	private $twig;
	//------------------------------------------------
	public function __construct($session, $em, $mailer, $twig) {
		$this->session = $session;
		$this->em = $em;
		$this->mailer = $mailer;
		$this->twig = $twig;
	}
	//------------------------------------------------
	public function getTest() {
		return 'Title from Symfony';
	}
}