<?php

//crear el objeto y cargar el xml
//simplexml_load_file convierte
// cualquier dato XML en un objeto que se puede procesar fácilmente
$xml = simplexml_load_file('TSL171218FP7_P6902_20190920.xml'); 
$ns = $xml->getNamespaces(true);
$xml->registerXPathNamespace('c', $ns['cfdi']);
$xml->registerXPathNamespace('t', $ns['tfd']);


//LEER LA INFORMACION DEL CFDI  
foreach ($xml->xpath('//cfdi:Emisor') as $Emisor){ 
  echo $Emisor['Nombre']; 
  echo "<br />"; 
  echo $Emisor['Rfc']; 
  echo "<br />"; 
}

//LEER LA INFORMACION DEL TFD
foreach ($xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
  echo $tfd['UUID']; 
  echo "<br />"; 
  echo $tfd['FechaTimbrado']; 
  echo "<br />"; 
} 


    



?>