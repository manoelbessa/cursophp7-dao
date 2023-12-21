<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");




        echo implode(" " , $usuarios[1]);

$root = new Usuario();

$root->loadbyId(3);

echo $root;


?>