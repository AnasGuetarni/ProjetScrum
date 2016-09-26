<?php 

class T_r_pays_pay extends Model{
	protected $pay_id;
	protected $pay_nom;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}