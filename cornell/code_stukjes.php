<?php
// Code stukje 1
if ( $this->active === false ) {
	return;
}
if ( ! $this->isValidColor( $color ) ) {
	echo 'Ik heb geen licht met de kleur: ' . $color . "\n";

	return;
}

$this->lights[ $color ] = 0;

// -------------------------------


// Code stukje 2
private $lights;
private $code;
private $active;

// -------------------------------


// Code stukje 3
foreach ($this->lights as $color => $status) {
	$this->lights[$color] = 0;
}
// -------------------------------


// Code stukje 4
return $this->code;
// -------------------------------


// Code stukje 5
$validColors = ['red', 'orange', 'green'];
if (in_array($color, $validColors)) {
	return true;
} else {
	return false;
}
// -------------------------------


// Code stukje 6
$validColors = ['red', 'orange', 'green'];
if (!$this->isValidColor($color)) {
	echo 'Ik heb geen licht met de kleur: ' . $color . "\n";
	return;
}
$this->switchAllLightsOff();
$this->lights[$color] = 1;
// -------------------------------


// Code stukje 7
echo 'Status van Stoplicht ' . $this->code . ":\n";

if ($this->active === true) {
	foreach ($this->lights as $color => $status) {
		echo $color . ' --> ' . $status . "\n";
	}
} else {
	echo 'Stoplicht inactief: oranje knippert' . "\n";
}
// -------------------------------


// Code stukje 8
$this->code = $code;
$this->active = true;
$this->lights = [
	'red' => 1,
	'orange' => 0,
	'green' => 0,
];
// -------------------------------


// Code stukje 9
$this->active = false;
$this->switchAllLightsOff();

// -------------------------------


// Code stukje 10
$this->active = true;
$this->switchOn('red');

// -------------------------------