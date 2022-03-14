<?php

class immeuble extends batiment
{

public $ascenseur;
public $nbappartement;
public $garage;

public function __construct( /* FILLE*/ $ascenseur, $nbappartement, $garage /* FILLE*/ ,/*MERE*/ $nom, $superficie, $type, $nbEtage /*MERE*/)
{
	/*FILLE*/
	$this-> unAscenseur = $ascenseur;
	$this-> unNbAppartement = $nbappartement;
	$this-> unGarage = $garage;
	
 	/*MERE*/
	 parent::__construct($nom, $superficie, $type, $nbEtage);

}

public function getAscenseur():?bool
{
	return $this->unAscenseur;
}

public function getNbAppartement():?int
{
	return $this->unNbAppartement;
}

public function getGarage():?bool
{
	return $this->unGarage;
}

}