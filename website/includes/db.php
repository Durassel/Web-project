<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=project;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}