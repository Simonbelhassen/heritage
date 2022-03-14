<?php
require 'BatiStructure.php';
require 'BatiHome.php';
require 'batiment.php';
require 'immeuble.php';
require 'cabane.php';
require 'maison.php';

$test = new batiment("La Ville De Simon",19,"villa",120);
print_r($test);
?>