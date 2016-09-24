<?php 

class T_e_photo_pho extends Model{
	protected $pho_id;
	protected $pho_url;
	protected $avi_id;
	protected $avis;
	protected $hot_id;
	protected $hotel;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->hotel = Hotel::findById($this->hot_id);
		$this->avis = Avis::findById($this->avi_id);
	}
}