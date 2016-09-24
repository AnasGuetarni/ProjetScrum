<?php 

class T_e_alias_ali extends Model{
	protected $ali_id;
	protected $hot_id;
	protected $hotel;
	protected $ali_intitule;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->hotel = Hotel::findById($this->hot_id);
	}
}