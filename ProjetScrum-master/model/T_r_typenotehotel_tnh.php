<?php 

class T_r_typenotehotel_tnh extends Model{
	protected $tnh_id;
	protected $tnh_libelle;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}