<?php


use PHPUnit\Framework\TestCase;
use App\Entities\Banque;
use App\Entities\Boutique;

class BoutiqueTest extends TestCase {

	public function testPaiementReussi(){

		$fausseBanque = $this->createMock(Banque::class);

		$fausseBanque->method('verifierPaiement')->willreturn(true);

		$boutique = new Boutique("ici banque");

		$reponse = $boutique->payer(100,"1290 1232 1233 1234");

		$this->assertEquals("Paiement de 100 e accepté", $reponse);


	}	

}