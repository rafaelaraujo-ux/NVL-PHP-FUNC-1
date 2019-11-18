<?php

Function cuentaLetraA($palabra){

	$palabra = strtolower($palabra);
	$vocalA = ["a"];

	for ($i = 0; $i < count($vocalA); $i++){
        $mensaje = "La palabra \"" . $palabra . "\" tiene " . substr_count($palabra,$vocalA[$i]) . " \"A\".<br/>";
	}

	echo $mensaje;

}	

echo cuentaLetraA("Almohada");

?>