<?php

class batiment implements BatiStructure
{

public $nom;
public $superficie;
public $type;
public $nbEtage;

public function __construct( $nom, $superficie, $type, $nbEtage)
{
	$this-> unNom = $nom;
	$this-> uneSuperficie = $superficie;
	$this-> unType = $type;
	$this-> unNbEtage = $nbEtage;
}

public function getNom():?string
{
	return $this->unNom;
}

public function getSuperficie():?int
{
	return $this->uneSuperficie;
}

public function getType():?string
{
	return $this->unType;
}

public function getNbEtage():?int
{
	return $this->unNbEtage;
}

}
?>