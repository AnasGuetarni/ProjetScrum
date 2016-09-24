<?php 

class HotelierController extends Controller {

	public function __construct()  {

	}

	

	public function register() {
		$this->render("register");
	}
	public function add(){
		$hotels = Hotel::FindAllBy("htr", 3);
		print_r($hotels);
		if(isset(parameters()["htr_nom"]))
		{
			$hotelier = new Hotelier();
			$ok = true;
			foreach(parameters() as $key=>$value)
			{
				echo $key;
				if($value == ''){
					$ok = false;
					break;
				}
				else{
					if(substr($key, 0, 2) != 'no' && $key != 'r')
						$hotelier->$key = $value;
				}
			}
			$this->render("index");
		} else {
			$this->render("register");
		}
	}
	
	public function addPhoto($idHotel) {
		$this->render("addPhoto", $idHotel);
	}


}
