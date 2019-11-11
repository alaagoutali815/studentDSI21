<?php
include 'dbconnexion.php';
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$ph=$_POST['phone'];
$id=$_POST['id'];

$rep=$bdd->prepare('UPDATE students SET fn=:fn , ln=:ln , em=:em , ph=:ph WHERE id=:id');

$rep->bindParam(':fn',$fn);
$rep->bindParam(':ln',$ln);
$rep->bindParam(':em',$em);
$rep->bindParam(':ph',$ph);
$rep->bindParam(':id',$id);
$rep->execute();
header('Location:menu.php');
?>