<?php

namespace Philippe\Blog\Model;

class Manager
{
	protected function dbConnect()
	{
		$dbProjet5 = new \PDO('mysql:host=localhost;dbname=siteMVC', 'root', 'root');
		return $dbProjet5;
	}
}