<?php
namespace Vozila\Automobili;

use BaznaKlasa\BaznaKlasaVozilo;

class Vozilo extends BaznaKlasaVozilo
{
    private $tipGoriva = "benzin";

    public function __construct($boja, $tipGoriva, $indetifikacijskiBroj)
    {
        parent::__construct($boja); 
        $this->tipGoriva = $tipGoriva;
    }
                
    public function prikaziDetalje()
    {
        return "Ovo je automobil, koristi gorivo: " . $this->tipGoriva . ", boja: " . $this->getBoja() . $this->prikaziOsnovneInformacije() . $this->indetifikacijskiBroj;
    }

}
?>