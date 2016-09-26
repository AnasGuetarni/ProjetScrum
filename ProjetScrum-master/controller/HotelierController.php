<?php 

class HotelierController extends Controller {

	public function __construct()  {

	}

	

	public function register() {
		$this->render("register");
	}
	public function add(){
		if(Hotelier::fieldAlreadyExists('mail', parameters()['htr_mail'])){
			$this->render("register", "L'adresse mail est deja utilisée");
		}
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
				$_SESSION['id_hotelier'] = $hotelier->htr_id;
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
