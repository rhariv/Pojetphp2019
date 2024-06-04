<?php
class database
{
	private $_host='mysql:host =localhost;dbname =utilisateur;charset=utf8';
	private $_username='root';
	private $_password='hari';
	private $_bdd;
	public function getHost()
	{
		return $this->_host;
	}
	public function setHost($host)
	{
		$his->_host=$host;
	}
	public function getUsername()
	{
		return $this->_username;
	}
	public function setUsername($username)
	{
		$this->_username=$username;
	}
	public function getPassword()
	{
		return $this->_password;
	}
	public function setPassword($pass)
	{
		$this->_password=$pass;
	}
	public function getBdd()
	{
		return $this->_bdd;
	}
	public function setBdd($basededonne)
	{
		$this->_bdd=$basededonne;
	}
	function connexion()
	{
		try 
		{
			$this->setBdd(new PDO($this->getHost(),$this->getUsername(),
				$this->getPassword()));

		}catch (Exeption $e)
		{
			die('Erreur :'.$e->getMessage());
		}
	}
	function addMember()
	{
		return 'INSERT INTO start_up(pseudo,nom,prenom,entreprise,pass) VALUES (:pseudo, :nom, :prenom, :entreprise, :pass)';
	}
}
?>