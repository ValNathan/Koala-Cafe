<!DOCTYPE html>
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="refresh" content="0; URL=index.html">
</head>
<?php
$sender = $_POST['email'];

 
$message = $_POST['message'];
 
$to = 'josephine@koala-cafe.fr'; 
$objet = $_POST['sujet']; //Met l'objet que tu veux
 
/* En-têtes de l'e-mail */
$headers = "From: $sender \r\n\r\n";
  
/* Envoi de l'e-mail */
mail($to, $objet, $message, $headers);
 
?>