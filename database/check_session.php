<?php 
session_start();

if(!isset($_SESSION['a_email']))
{
	header('Location:index.php');
}

?>