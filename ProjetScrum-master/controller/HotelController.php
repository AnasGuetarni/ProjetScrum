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
	
	public function register()
	{
		if(Hotel::fieldAlreadyExists('mail', parameters()['hot_mel'])){
			$this->render("register", "L'adresse mail est deja utilisée");
		}
		if(isset(parameters()["hot_nom"]))
		{
			$hotel = new Hotel();
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
						$hotel->$key = $value;
				}
				$hotel->hotelier = $_SESSION['id_hotelier'];
			}
			$this->render("index");
		} else {
			$this->render("add");
		}
		
		/*if (isset(parameters()["hot_id"])) {
		$hotel = new t_e_hotel_hot();
		$tableau = Array("hot_nom",	"hot_description",	"hot_adrligne1",	"hot_adrligne2",
		"hot_cp",	"hot_ville",	"hot_etat",	"hot_indicatif",
		"hot_tel",	"hot_mel",	"hot_siteweb",	"hot_nbchambres");
		foreach ($tableau as $v)
		{
			$hotel->$v = parameters()["$v"];
		}
		*/

	
		
				/*
		 $hotel = new t_e_hotel_hot(1,1,parameters()["prx_id"],parameters()["hot_nom"],parameters()["hot_description"],parameters()["hot_adrligne1"],parameters()["hot_adrligne2"],
								 parameters()["hot_cp"],parameters()["hot_ville"],parameters()["hot_etat"],parameters()["pay_id"],1,1,parameters()["cat_nbetoiles"],
								parameters()["hot_indicatif"],parameters()["hot_tel"],parameters()["hot_mel"],parameters()["hot_siteweb"],parameters()["hot_nbchambres"]);
		*/
	}
	
	
	public function set()
	{
		if(isset(parameters()["hot_id"]))
		{
			$hotel = new Hotel(parameters()['hot_id']);
			foreach(parameters() as $key=>$value)
			{
				if(substr($key, 0, 2) != 'no' && $key != 'r' && $value != '')
					$hotel->$key = $value;
				$hotel->hotelier = $_SESSION['id_hotelier'];
			}
			$this->render("index");
		} else {
			$this->render("modify", parameters()['id']);
		}
		
		/*if (isset(parameters()["hot_id"])) {
		$hotel = new t_e_hotel_hot();
		$tableau = Array("hot_nom",	"hot_description",	"hot_adrligne1",	"hot_adrligne2",
		"hot_cp",	"hot_ville",	"hot_etat",	"hot_indicatif",
		"hot_tel",	"hot_mel",	"hot_siteweb",	"hot_nbchambres");
		foreach ($tableau as $v)
		{
			$hotel->$v = parameters()["$v"];
		}
		*/

	
		
				/*
		 $hotel = new t_e_hotel_hot(1,1,parameters()["prx_id"],parameters()["hot_nom"],parameters()["hot_description"],parameters()["hot_adrligne1"],parameters()["hot_adrligne2"],
								 parameters()["hot_cp"],parameters()["hot_ville"],parameters()["hot_etat"],parameters()["pay_id"],1,1,parameters()["cat_nbetoiles"],
								parameters()["hot_indicatif"],parameters()["hot_tel"],parameters()["hot_mel"],parameters()["hot_siteweb"],parameters()["hot_nbchambres"]);
		*/
	}
	

}
