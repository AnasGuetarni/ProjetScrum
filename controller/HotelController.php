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
		if(isset(parameters()['id']) && is_numeric(parameters()['id']))
		{
			$this->render("view", parameters()['id']);	
		}
		else{
			$this->render("index");
		}
	}
	

}
