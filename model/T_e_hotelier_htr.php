<?php 

class T_e_hotelier_htr extends Model{
	protected $htr_id;
	protected $htr_mel;
	protected $htr_motpasse;
	protected $htr_nom;
	protected $htr_prenom;
	protected $htr_adrligne1;
	protected $htr_adrligne2;
	protected $htr_cp;
	protected $htr_ville;
	protected $htr_etat;
	protected $pay_id;
	protected $pays;
	
	
	public function __construct($id = null)
	{
		parent::__construct($id);
		//$pays = Pays::findById($this->$pay_id);
	}
}
