<?php

class maison extends batiment implements BatiHome
{

public $garage;
public $cheminee;

public function __construct( /* FILLE*/ $garage, $cheminee /* FILLE*/, /*MERE*/ $nom, $superficie, $type, $nbEtage /*MERE*/ )
{
	/*FILLE*/
	$this-> unGarage = $garage;
	$this-> uneCheminee = $cheminee;
	/*FILLE*/
	
 	/*MERE*/
	 parent::__construct($nom, $superficie, $type, $nbEtage);
	/*MERE*/

}

public function getGarage($garage):?bool
{
	return $this->unGarage;
}

public function getCheminee($cheminee):?bool
{
	return $this->uneCheminee;
}

}