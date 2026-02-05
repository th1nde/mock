<?php

use PHPUnit\Framework\TestCase;
use App\Entities\ConseillerVoyage;
use App\Entities\ServiceMeteo;

class VoyageTest extends TestCase{

	public function testPartirSiSoleil(){

		$fauxsoleil = $this->createMock(ServiceMeteo::class);

		$fauxsoleil->method('getTemps')->willreturn("Soleil");

		$voyage = new ConseillerVoyage("conseil voyage");

		$reponse = $voyage->peutOnPartir("Paris");

		$this->assertEquals("Bon voyage !", $reponse);

	}
}


?>