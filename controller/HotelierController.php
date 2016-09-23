<?php 

class HotelierController extends Controller {

	public function __construct()  {

	}

	

	public function register() {
		$this->render("register");
	}
	public function checkData($array){
		return true;
	}
	
	public function addPhoto($idHotel) {
		$this->render("addPhoto", $idHotel);
	}


}
