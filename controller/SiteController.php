<?php

class SiteController extends Controller {

	public function __construct()  {

	}

	

	public function index() {
		$this->render("index");
	}

	public function about() {
		$this->render("about");	
	}
	
	public function logout() {
		$_SESSION['id_hotelier'] = '';
		$_SESSION['id_abonne'] = '';
		
		$this->render("index");	
	}
	public function login() {
		$this->render("login");	
	}
	public function connexion() {
		$hotelier = Hotelier::checkConnexion(parameters()['mail'], parameters()['motpasse']);
		if($hotelier != false){
			$_SESSION['id_hotelier'] = $hotelier['htr_id'];
			$this->render("index");
		}
		$this->render("login");
	}


}


