<?php
include_once "Dancer.php";
include_once "Pair.php";

$dancer1 = new Dancer("A","MALE");
$dancer2 = new Dancer("B","MALE");
$dancer3 = new Dancer("C","MALE");
$dancer4 = new Dancer("D","MALE");
$dancer5 = new Dancer("E","FEMALE");
$dancer6 = new Dancer("F","FEMALE");
$dancer7 = new Dancer("G","FEMALE");

$pair = new Pair();
$pair->pairDancer();

echo $pair->pairDancer();




