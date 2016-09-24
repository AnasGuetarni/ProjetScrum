<?php 

class T_e_abonne_abo extends Model{
	protected $abo_id;
	protected $abo_pseudo;
	protected $abo_motpasse;
	protected $abo_mel;
	protected $abo_nom;
	protected $abo_prenom;
	protected $abo_adrligne1;
	protected $abo_adrligne2;
	protected $abo_cp;
	protected $abo_ville;
	protected $abo_etat;
	protected $pay_id;
	protected $pays;		//Classe PAYS
	protected $abo_latitude;
	protected $abo_longitude;
	protected $abo_indicatif;
	protected $abo_tel;
	protected $abo_aeroport;
	
	public function __construct($id = null)
	{
		parent::__construct($id);
		//$this->pays = Pays::findById($this->pay_id);
	}
}