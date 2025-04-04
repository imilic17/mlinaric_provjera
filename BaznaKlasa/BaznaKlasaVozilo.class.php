<?php
namespace BaznaKlasa;

class BaznaKlasaVozilo {
    protected $indetifikacijskiBroj = 5;
    protected $boja = 'crvena';

    protected function __construct($indetifikacijskiBroj='123456', $boja='plava') {
        $this->indetifikacijskiBroj = $indetifikacijskiBroj;
        $this->boja = $boja;
    }

    protected function getBoja() {
        return $this->boja;
    }

    public function prikaziOsnovneInformacije() {
        echo 'Identifikacijski broj: ' . $this->indetifikacijskiBroj;
        echo 'Boja vozila je: ' . $this->boja ;
    }
}
?>