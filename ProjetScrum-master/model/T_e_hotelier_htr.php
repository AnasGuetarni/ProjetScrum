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
		//$this->pays = Pays::findById($this->pay_id);
	}
	public static function checkConnexion($mail, $pass){
		$query = "select htr_id from t_e_hotelier_htr where htr_mel='".$mail."' and htr_motpasse='".$pass."'";
		$st = db()->prepare($query);
		$st->execute();
		if($st->rowCount() != 1)
			return false;
		else 
			return $st->fetch();
	}
}
