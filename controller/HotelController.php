<?php 

class PhotoController extends Controller {

	public function __construct()  {

	}

	

	public function addPhoto() {
		$this->render("addPhoto");
	}
	public function getPhoto(){
		if(isset(parameters()["photo_url"]))
		{
			print_r(parameters());
			$hotel = new Hotel();
			$ok = true;
			foreach(parameters() as $key=>$value)
			{
				if($value == ''){
					$ok = false;
					break;
				}
				else{
					$hotel->$key = $value;
					$this->render("index");
				}
			}
		} else {
			$this->render("addPhoto");
		}
	}

}
