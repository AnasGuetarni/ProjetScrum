<?PHP

class t_e_hotel_hot extends Model
{
	protected $hot_id;
	protected $htr_id;
	protected $prx_id;
	protected $hot_nom;
	protected $hot_description;
	protected $hot_adrligne1;
	protected $hot_adrligne2;
	protected $hot_cp;
	protected $hot_ville;
	protected $hot_etat;
	protected $pay_id;
	protected $hot_latitude;
	protected $hot_longitude;
	protected $cat_nbetoiles;
	protected $hot_indicatif;
	protected $hot_tel;
	protected $hot_mel;
	protected $hot_siteweb;
	protected $hot_nbchambres;
	
	public function __construct($hot_id,$htr_id,$prx_id,$hot_nom,$hot_description,$hot_adrligne1,$hot_adrligne2,
								$hot_cp,$hot_ville,$hot_etat,$pay_id,$hot_latitude,$hot_longitude,$cat_nbetoiles,
								$hot_indicatif,$hot_tel,$hot_mel,$hot_siteweb,$hot_nbchambres)
	{
				$this->hot_nom = $hot_nom;

                $this->hot_description = $hot_description;

                $this->hot_adrligne1 = $hot_adrligne1;

                $this->hot_adrligne2 = $hot_adrligne2;

                $this->hot_cp = $hot_cp;

                $this->hot_ville = $hot_ville;

                $this->hot_etat = $hot_etat;

                $this->hot_indicatif = $hot_indicatif;

                $this->hot_tel = $hot_tel;

                $this->hot_mel = $hot_mel;

                $this->hot_siteweb = $hot_siteweb;

                $this->hot_nbchambres = $hot_nbchambres;

                $this->htr_id = 1;//$_SESSION["id_hotelier"]; IMPORTANT

                $this->prx_id = $prx_id;

                $this->pay_id = $pay_id;

                $this->cat_nbetoiles = $cat_nbetoiles;

                $this->hot_latitude = 0;//default

                $this->hot_longitude = 0;//default
				
		$query = "INSERT INTO t_e_hotel_hot VALUES
		( nextval('t_e_hotel_hot_hot_id_seq'::regclass), $this->htr_id, $this->prx_id, '$this->hot_nom','$this->hot_description','$this->hot_adrligne1',
		'$this->hot_adrligne2','$this->hot_cp','$this->hot_ville','$this->hot_etat',$this->pay_id,$this->hot_latitude,$this->hot_longitude,$this->cat_nbetoiles,'$this->hot_indicatif',
		'$this->hot_tel','$this->hot_mel','$this->hot_siteweb','$this->hot_nbchambres' )";
		$st = db()->prepare($query);
		$st->execute();
		$row = $st->fetch();	
		echo "$query";
		echo $_POST["prx_id"];
	}
}

















?>