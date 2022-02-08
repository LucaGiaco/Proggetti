<?php
$arr_arr = array (
array( "cliente"=>"Marco", "importo" =>256,"pagato"=>"SI"),
array( "cliente"=>"Pietro", "importo" =>23,"pagato"=>"sospeso"),
array( "cliente"=>"Federico","importo" =>48,"pagato"=>"NO"),
);
$numOfRows=count($arr_arr);
for($i=0; $i<$numOfRows; $i++){
$row=$arr_arr[$i];
$cliente = $row["cliente"];
$importo = $row["importo"];
$pagato = $row["pagato"];
$tot =+ $row["importo"];
echo "nome del cliente: ". $row["cliente"]. "<br>";
echo "importo: ". $row["importo"]. "€<br>";
echo "stato del pagamento (SI-NO-sospeso): ";

if($pagato == "NO"){ echo "NON EFFETTUATO". "<br><br>";
}
if($pagato == "SI"){ echo "EFFETTUATO". "<br><br>";
}
if($pagato == "sospeso"){ echo "SOSPESO". "<br><br>";
}
}
echo "importo totale: ". $tot. "€<br>";

?>
