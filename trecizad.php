<?php
$niz = array ( 
    array("ime"=>"Danilo","prezime"=>"Grbesa","godine"=>"27"),
    array("ime"=>"Danilo","prezime"=>"Grbesa","godine"=>"27"),
    array("ime"=>"Danilo","prezime"=>"Grbesa","godine"=>"27"),
    array("ime"=>"Danilo","prezime"=>"Grbesa","godine"=>"27"),
);

function kljuc($kljuc, $niz) {
    foreach ($niz as $key) {
if (array_key_exists($kljuc,$niz)) {
    echo "Kljuc postoji";
} else {
    echo "Kljuc ne postoji";
}
    }
}


echo kljuc("ime", $niz);
?>