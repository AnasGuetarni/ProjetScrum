<?php 

class T_r_questionhotel_qho extends Model{
	protected $qho_id;
	protected $qho_question;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}