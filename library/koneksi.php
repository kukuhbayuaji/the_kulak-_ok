<?php

class Koneksi{

	public function dbkoneksi()
	{
	return new PDO("mysql:host=localhost;dbname=register","root","");
	}
}
?>