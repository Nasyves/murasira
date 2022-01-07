<?php
/*
session_start();
try{
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'murasira');
}
catch(exception $e){
	die('error'.$e->getmessage());
}

$name = $_POST['izina'];
$pass = $_POST['password'];

$s = " select * from user where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if(num == 1){
	echo "Username Already Taken";
}
else{
	$reg = "insert into usertable(name, password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}*/
try{
$dbb = new PDO('mysql:host=localhost; dbname=murasira', 'root', '');
}
catch(exception $e){
	die('error: '.$e ->getmessage());
}
$reponse = $dbb->query('select * FROM jeux_video WHERE possesseur=\'florent\' ');

while($donnees=$reponse->fetch()){

 echo $donnees['nom'] ." appartient a " .$donnees['possesseur'].'</br>';
	
	$reponse ->closeCursor();
}
?>