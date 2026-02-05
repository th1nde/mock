<?php

namespace App\Entities;

class Boutique {

	private $banque;

	private function __construct($banque) {
		$this->banque = $banque;
	}

	public function payer($montant, $carte) {

	if($this->banque->verifierPaiement($carte)){

		return "Paiement de" . $montant . " e accepté";
	}

	return "paiment refusé";

	}
	
}

?>