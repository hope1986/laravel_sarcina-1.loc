<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country as Countries;

use Illuminate\Http\Request;
use Illuminate\Session;

class CountriesController extends Controller {

<?php
$resultat = mysql_query("SELECT * FROM countries",$db);
$array = mysql_fetch_array($resultat);
do
{
echo "Name: ".$array['name']."<br>Cod: ".$array['cod']."<br><br>";
}
while($array = mysql_fetch_array($resultat));
?>

}
