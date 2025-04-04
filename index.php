<?php 
require_once __DIR__ . '/BaznaKlasa/BaznaKlasaVozilo.class.php';
require_once __DIR__ . '/Vozila/Bicikli/Vozilo.class.php';
require_once __DIR__ . '/Vozila/Motori/Vozilo.class.php';
require_once __DIR__ . '/Vozila/Automobili/Vozilo.class.php';

use Vozila\Motori\Vozilo as Motor;
use Vozila\Bicikli\Vozilo as Bicikl;
use Vozila\Automobili\Vozilo as Auto;

$auto = new Auto('zelena','dizel','5488');
echo $auto->prikaziDetalje().'<br>';
$motor = new Motor('zelena', 2, '123456');
echo $motor->prikaziDetalje().'<br>';
$bicikl = new Bicikl('zuta', 'nesto', '789456');
echo $bicikl->prikaziDetalje().'<br>';

?>