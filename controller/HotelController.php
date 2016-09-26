<?php 

class HotelController extends Controller {

	public function __construct()  {

	}

	

	public function add() {
		//$this->render("add");
		$hotel = new t_e_hotel_hot(1,1,parameters()["prx_id"],parameters()["hot_nom"],parameters()["hot_description"],parameters()["hot_adrligne1"],parameters()["hot_adrligne2"],
								 parameters()["hot_cp"],parameters()["hot_ville"],parameters()["hot_etat"],parameters()["pay_id"],1,1,parameters()["cat_nbetoiles"],
								parameters()["hot_indicatif"],parameters()["hot_tel"],parameters()["hot_mel"],parameters()["hot_siteweb"],parameters()["hot_nbchambres"]);
		
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
