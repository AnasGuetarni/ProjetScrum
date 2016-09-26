<?php 

class T_e_hotel_hot extends Model{
	protected $hot_id;
	protected $htr_id;
	protected $hotelier;
	protected $prx_id;
	protected $prix;
	protected $hot_nom;
	protected $hot_description;
	protected $hot_adrligne1;
	protected $hot_adrligne2;
	protected $hot_cp;
	protected $hot_ville;
	protected $hot_etat;
	protected $pay_id;
	protected $pays;
	protected $hot_latitude;
	protected $hot_longitude;
	protected $cat_nbetoiles;
	protected $hot_indicatif;
	protected $hot_tel;
	protected $hot_mel;
	protected $hot_siteweb;
	protected $hot_nbchambres;
	protected $photos;
	
	
	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->hotelier = Hotelier::findById($this->htr_id);
		$this->pays = Pays::findById($this->pay_id);
		$this->prix = FourchettePrix::findById($this->prx_id);
		$this->photos = Photo::findAllBy("hot", $this->hot_id);
	}
}