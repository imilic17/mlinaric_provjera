<?php
namespace Vozila\Motori;

use BaznaKlasa\BaznaKlasaVozilo;

class Vozilo extends BaznaKlasaVozilo
{
    private $brojKotaca = "2";

    public function __construct($boja, $brojKotaca, $indetifikacijskiBroj)
    {
        parent::__construct($indetifikacijskiBroj, $boja); 
        $this->brojKotaca = $brojKotaca;
    }
    public function getType()
    {
        return "Motor";
    }
    public function prikaziDetalje()
    {
        return "Ovo je motor, broj kotaca: " . $this->brojKotaca . ", boja: " . $this->getBoja();
    }
    
}
?>