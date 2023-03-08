<?php
$to = "yibrantshop@gmail.com";

$name = $_POST['nombre'];
$necesidad = $_POST['necesidad'];
$trabajo = $_POST['tipoWork'];
$gama = $_POST['gama'];
$edicion = $_POST['edicionmul'];
$presupuesto = $_POST['presupuesto'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contacto = $_POST['contacto'];
$sabes = $_POST['sabes'];
$cpu = $_POST['cpu'];
$mother = $_POST['mother'];
$disipador = $_POST['disipador'];
$ram = $_POST['ram'];
$almacenamiento = $_POST['almacenamiento'];
$adicional = $_POST['adicional'];
$gpu = $_POST['gpu'];
$gabinete = $_POST['gabinete'];
$presupesto = $_POST['presupuesto'];
$numero = $_POST['numero'];

/* Message */
$asunto="Nuevo pedido";

$mensaje ="Nuevo pedido!\r\n";
$mensaje.="\r\n";
$mensaje.="Enviado por ".$name.",\r\n";
$mensaje.="Su e-mail es: ".$correo."\r\n";
$mensaje.="Su teléfono es:  ".$telefono."\r\n";
$mensaje.="\r\n";

$mensaje.="La necesita para:  ".$necesidad."\r\n";
$mensaje.="Prefiere que lo contacten mediante:  ".$contacto."\r\n";
$mensaje.="¿Sabe lo que necesita?:  ".$sabes."\r\n";

$mensaje.="\r\n";

$mensaje.="La ocupa para trabajar con:  ".$trabajo."\r\n";
$mensaje.="Necesitan: ".$numero." equipos\r\n";
$mensaje.="La busca en gama:  ".$gama."\r\n";
$mensaje.="Qué editará:  ".$edicion."\r\n";
$mensaje.="\r\n";
$mensaje.="Presupuesto: $".$presupesto."\r\n";
$mensaje.="\r\n";
$mensaje.="En caso de no saber que necesita mostrará los componentes pero no tendrá información\r\n";
$mensaje.="CPU:  ".$cpu."\r\n";
$mensaje.="Motherboard:  ".$mother."\r\n";
$mensaje.="Disipador:  ".$disipador."\r\n";
$mensaje.="Memoria RAM:  ".$ram."\r\n";
$mensaje.="Almacenamiento:  ".$almacenamiento."\r\n";
$mensaje.="Almacenamiento extra:  ".$adicional."\r\n";
$mensaje.="GPU: ".$gpu."\r\n";
$mensaje.="Gabinete:  ".$gabinete."\r\n";

mail($to, $asunto, utf8_decode($mensaje), $header);
header("Location:gracias.html");
?>