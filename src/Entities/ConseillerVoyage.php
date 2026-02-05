<?php

namespace App\Entities;

class ConseillerVoyage {

	private $ServiceMeteo;

	public function __construct($ServiceMeteo){

		$this->ServiceMeteo = $ServiceMeteo;

	}

	public function peutOnPartir($ville){

		if($this->ServiceMeteo->getTemps($ville) == "Soleil"){

		
			return "Bon voyage !";
		}

		else {
			return "Restez a la maison";

		}
	}
}


?>





?>