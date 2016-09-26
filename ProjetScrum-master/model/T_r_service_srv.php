<?php 

class T_r_service_srv extends Model{
	protected $srv_id;
	protected $srv_libelle;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}