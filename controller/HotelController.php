<?php 

class HotelController extends Controller {

	public function __construct()  {

	}

	

	public function add() {
		$this->render("add");
	}
	public function index() {
		$this->render("index");
	}
	public function view() {
		$this->render("add", );
	}
	

}
