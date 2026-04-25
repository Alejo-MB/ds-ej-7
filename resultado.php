<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if($usuario == $clave){
echo 'Hola ' . $usuario . ' Acceso correcto';
}
else{
echo 'Hola ' . $usuario .  ' Usuario o contraseña incorrectos';

}