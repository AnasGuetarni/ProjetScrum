<?php 

class PhotoController extends Controller {

	public function __construct()  {

	}

	

	public function addPhoto() {
		$this->render("addPhoto");
	}
	public function getPhoto(){
		print_r(parameters());
		if(isset(parameters()["pho_url"]))
		{
			$photo = new Photo();
			$ok = true;
			foreach(parameters() as $key=>$value)
			{
				if($value == ''){
					$ok = false;
					break;
				}
				else{
					if($key != 'r')
						$photo->$key = $value;
				}
			}
			$this->render("index");
		} else {
			//$this->render("addPhoto");
		}
	}

}
