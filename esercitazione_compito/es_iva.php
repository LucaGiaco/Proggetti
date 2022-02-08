<?php
$arr_arr = array (
array( "nome"=>"computer", "prezzo"=>750, "quantita"=>3),
array( "nome"=>"latte", "prezzo"=>2, "quantita"=>6),
array( "nome"=>"bambino", "prezzo"=>20, "quantita"=>4),
);

$numOfRows=count($arr_arr);
for($i=0; $i<$numOfRows; $i++){
$row=$arr_arr[$i];
$nome = $row["nome"];
$prezzo = $row["prezzo"];
$quantita = $row["quantita"];
$prezzotot = $row["prezzo"]*$row["quantita"];
$prezzoiva = $prezzotot+$prezzotot*0.22;
echo "nome del prodotto: ". $row["nome"] . "<br>";
echo "prezzo base del singolo prodotto: ". $row["prezzo"] . "€<br>";
echo "quantità: ". $row["quantita"] . "<br>";
echo "prezzo totale + iva: ". $prezzoiva . "€<br><br>";
}

?>
