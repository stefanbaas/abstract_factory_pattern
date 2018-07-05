<?php
// Include the autoload definitions generated -
// automatically by the Composer.
include_once __DIR__ . '/../vendor/autoload.php';

// Instantiate the Blade module to automatically load the home view.
$blade = new \Jenssegers\Blade\Blade(__DIR__. '/../resources/views', __DIR__. '/../storage/cache');
echo $blade->make('home', []);

// Melee medabot
$buildMeleeMedabot = New \App\Classes\BuildMeleeMedabot();
$meleeMedabot = $buildMeleeMedabot->makeMedabot();
echo "<b>Melee medabot</b><br/>";
echo "Colour: ".$meleeMedabot->getColour()."<br/>";
echo "Head: ". $meleeMedabot->getHead()->toString()."<br/>";
echo "Left arm: ". $meleeMedabot->getLeftArm()->toString()."<br/>";
echo "Right arm: ". $meleeMedabot->getRightArm()->toString()."<br/>";
echo "Left leg: ". $meleeMedabot->getLeftLeg()->toString()."<br/>";
echo "Right leg: ". $meleeMedabot->getRightLeg()->toString()."<br/>";
echo "Medal: ". $meleeMedabot->getMedal()->toString()."<br/><br/>";

//Ranged medabot

$buildRangedMedabot = New \App\Classes\BuildRangedMedabot();
$rangedMedabot = $buildRangedMedabot->makeMedabot();
echo "<b>Ranged medabot</b><br/>";
echo "Colour: ".$rangedMedabot->getColour()."<br/>";
echo "Head: ". $rangedMedabot->getHead()->toString()."<br/>";
echo "Left arm: ". $rangedMedabot->getLeftArm()->toString()."<br/>";
echo "Right arm: ". $rangedMedabot->getRightArm()->toString()."<br/>";
echo "Left leg: ". $rangedMedabot->getLeftLeg()->toString()."<br/>";
echo "Right leg: ". $rangedMedabot->getRightLeg()->toString()."<br/>";
echo "Medal: ". $rangedMedabot->getMedal()->toString()."<br/>";