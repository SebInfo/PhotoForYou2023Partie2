<?php
$hote = "127.0.0.1:8889";
$bd = "photoforyou2";
$login = "root";
$motDePasse ="root";
$erreur = null;

try
{
    $db = new PDO("mysql:host = $hote;dbname=$bd;charset=utf8",$login,$motDePasse);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
     $error = "Erreur dans la connexion: ".$e->getMessage();
     echo "<div class='alert alert-danger'>$error</div>";
}

/*

$db = new PDO('mysql:host=127.0.0.1:8889;dbname=photoforyou2','root','root');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $manager = new UserManager($db);*/