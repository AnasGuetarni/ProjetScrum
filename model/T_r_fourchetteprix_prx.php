<?php 

class T_r_fourchetteprix_prx extends Model{
	protected $prx_id;
	protected $prx_fourchette;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}