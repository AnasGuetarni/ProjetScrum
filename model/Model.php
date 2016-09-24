<?php

// Classe métier générique à accès BD automatique
// ToDo : non duplication des instances de classes liées
// ToDo : modèle hiérarchique

class Model {

	// Un appel au constructeur sans id créées une instance et une ligne dans la db
	public function __construct($id=null) {
		$class = get_class($this);
		$table = strtolower($class);
		$get_id = substr($class, -3)."_id";
		if ($id == null) {
			$st = db()->prepare("insert into $table default values returning $get_id");
			echo "insert into $table default values returning $get_id";
			$st->execute();
			$row = $st->fetch();
			$field = $get_id;
			$this->$field = $row[$field];
		} else {
			$st = db()->prepare("select * from $table where $get_id=:id");
			$st->bindValue(":id", $id);
			$st->execute();
			if ($st->rowCount() != 1) {
				throw new Exception("Not in table: ".$table." id: ".$id );
			} else {
				$row = $st->fetch(PDO::FETCH_ASSOC);
				foreach($row as $field=>$value) {
					/*if (substr($field, 0,2) == "id") {
						$linkedField = substr($field, 2);
						$linkedClass = ucfirst($linkedField);
						if ($linkedClass != get_class($this))
							$this->$linkedField = new $linkedClass($value);
						else
							$this->$field = $value;
					} else*/
						$this->$field = $value;
				}
			}
		}

	}

	public static function findAll() {
		$class = get_called_class();
		$table = strtolower($class);
		$get_id = substr($class, -3)."_id";
		$st = db()->prepare("select $get_id from $table");
		$st->execute();
		$list = array();
		while($row = $st->fetch(PDO::FETCH_ASSOC)) {
			$list[] = new $class($row[$get_id]);
		}
		return $list;
	}
	
	public static function findAllBy($classCalling, $id) {
		$class = get_called_class();
		$table = strtolower($class);
		$get_id_where = substr($classCalling, -3)."_id";
		$get_id = substr($class, -3)."_id";
		$st = db()->prepare("select $get_id from $table where $get_id_where=".$id);
		//echo "select $get_id from $table where $get_id_where=".$id;
		$st->execute();
		$list = array();
		while($row = $st->fetch(PDO::FETCH_ASSOC)) {
			$list[] = new $class($row[$get_id]);
		}
		return $list;
	}
	
	public static function findById($id) {
		$class = get_called_class();
		return new $class($id);
	}


	public function __get($fieldName) {
		$prefix = substr(get_class($this), -3);
		$varName = /*$prefix."_".*/$fieldName;
		if (property_exists(get_class($this), $varName))
			return $this->$varName;
		else
			throw new Exception("Unknown variable: ".$varName);
	}


	public function __set($fieldName, $value) {
		$class = get_class($this);
		$prefix = substr($class, -3);
		$varName = /*$prefix."_".*/$fieldName;
		if ($value != null) {
			if (property_exists(get_class($this), $varName)) {
				$this->$varName = $value;
				$table = strtolower($class);
				$id = $prefix."_id";//.$fieldName;
				/*if (isset($value->$id)) {
					$st = db()->prepare("update $table set ".$prefix."_id=:val where ".$prefix."_id=:id");
					$id = substr($id, 1);
					$st->bindValue(":val", $value->$id);
				} else {*/
					$st = db()->prepare("update $table set $fieldName=:val where $id=:id");
					$st->bindValue(":val", $value);
				//}
				$id = $prefix.'_id';//"id".$table;
				$st->bindValue(":id", $this->$id);
				$st->execute();
			} else
				throw new Exception("Unknown variable: ".$varName . " ($fieldName) class : $class");
		}
	}

	// à surcharger
	public function __toString() {
		return get_class($this).": ".$this->name;
	}




}



