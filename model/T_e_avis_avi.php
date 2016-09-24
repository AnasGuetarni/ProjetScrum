<?php 

class T_e_avis_avi extends Model{
	protected $avi_id;
	protected $abo_id;
	protected $abonne;
	protected $hot_id;
	protected $hotel;
	protected $vis_id;  //Type visite
	protected $visite;
	protected $per_id;  //Type periode
	protected $periode;
	protected $avi_date;
	protected $avi_langue;
	protected $avi_titre;
	protected $avi_detail;
	protected $avi_noteglobale;
	protected $avi_conseil;
	protected $avi_reponseavis;
	
	
	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->abonne = Abonne::findById($this->abo_id);
		$this->hotel = Hotel::findById($this->hot_id);
		//$this->visite = Visite::findById($this->vis_id);
		//$this->periode = Periode::findById($this->per_id);
	}
}