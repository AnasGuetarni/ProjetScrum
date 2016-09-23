<?php 

class HotelierController extends Controller {

	public function __construct()  {

	}

	

	public function register() {
		$this->render("register");
	}
	public function add(){
		if(isset(parameters()["htr_nom"]))
		{
			print_r(parameters());
			$hotelier = new Hotelier();
			$ok = true;
			foreach(parameters() as $key=>$value)
			{
				if($value == ''){
					$ok = false;
					break;
				}
				else{
					$hotelier->$key = $value;
					$this->render("index");
				}
			}
		} else {
			$this->render("register");
		}
	}
	
	public function addPhoto($idHotel) {
		$this->render("addPhoto", $idHotel);
	}


}
