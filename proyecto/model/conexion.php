<?php

class Conexion
{
	public static function connect()
	{
		$mbd = new PDO('mysql:host=localhost;dbname=ibhunter', "root", "");
		return $mbd;
	}
}
