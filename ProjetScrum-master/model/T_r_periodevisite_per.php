<?php 

class T_r_periodevisite_per extends Model{
	protected $per_id;
	protected $per_mois;
	protected $per_annee;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
	}
}