<?php
include 'dbconnexion.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$req=$bdd->prepare("INSERT INTO students VALUES (:firstname , :lastname , :email , :phone)");

$req->bindParam(':firstname',$firstname);
$req->bindParam(':lastname',$lastname);
$req->bindParam(':email',$email);
$req->bindParam(':phone',$phone);

$req->execute();

header('Location:menu.php');
?>