<?php
	try
	{
		$bdd=new PDO('mysql:host=localhost;dbname=murasira','root','');
	}
	catch (exception $e)
	{
		die('error:'.$e->getMessage());
	}
	$req=$bdd->query('INSERT INTO accounts (username,password,email,usertype) VALUES (\''.$_POST['username'].'\',\''.$_POST['password'].'\',\''.$_POST['email'].'\',\''.$_POST['user'].'\')') or die(print_r($bdd->errorinfo()));
?>