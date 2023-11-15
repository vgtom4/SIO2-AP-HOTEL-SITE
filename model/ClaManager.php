<?php
//MODELE ClaManager
//Permettant la gestion de la table CLASSE

require_once("DBManager.php"); 

class ClaManager extends Manager
{
	//Retourne la liste complète des classes
    public function getAllCla()
	{
		$reqresult = parent::getDb()->prepare("select clacod, clalib from classe order by clacod");
		$reqresult->execute();
		return $reqresult->fetchAll();
    }
	
	//Retourne une classe
	public function getCla($uncodcla)
	{
		$reqresult = parent::getDb()->prepare("select clacod, clalib from classe where clacod= :cla");
		$reqresult->bindParam("cla",$uncodcla,PDO::PARAM_STR);
		$reqresult->execute();
		return $reqresult->fetchAll();
    }
}
//Absence volontaire de la balise fermeture php