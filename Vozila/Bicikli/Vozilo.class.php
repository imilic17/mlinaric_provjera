<?php
namespace Vozila\Bicikli;

use BaznaKlasa\BaznaKlasaVozilo;

class Vozilo extends BaznaKlasaVozilo
{
    private $imaKosaru = "ima kosaru";

    public function __construct($boja, $imaKosaru, $indetifikacijskiBroj)
    {
        parent::__construct($boja, $indetifikacijskiBroj);
        $this->imaKosaru = $imaKosaru;
    }
                
    public function prikaziDetalje()
    {
        return "Ovo je bicikl i " . $this->imaKosaru . ", boja: " . $this->getBoja();
    }

    public function prikaziOsnovneInformacije()
    {
        echo 'Identifikacijski broj: ' . $this->indetifikacijskiBroj;
        echo 'Boja vozila je: ' . $this->boja ;
    }           
}
?>