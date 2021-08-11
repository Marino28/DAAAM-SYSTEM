<?php

$time = time();
$timestamp = date("H:i:s", $time);

$to = "ad17-1540@unphu.edu.do";
$subject = "¡ALERTA COMPUERTA ABIERTA!";
$message = "A las: ".$timestamp." la compuerta de la presa fue abierta manualmente. ".$tempF;
$headers = "De:MarinoDCC@DAAAM.com.do";

mail($to, $subject, $message, $headers);

print "Script Ran $time";

?>
