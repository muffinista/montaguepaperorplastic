<?php
$plastic = 1;

// dec 30th 2013 is a paper week
$base = new DateTime('2013-12-30 00:00:00');

$present = strtotime("this week this Monday");
// $present = strtotime("2013-12-23");
$monday = new DateTime("@" . $present);

$interval  = $base->diff($monday);
$days_elapsed   = $interval->format('%d days');
$weeks = $days_elapsed / 7;

if ( $weeks % 2 == $plastic ) {
	print " Plastic";
}
else {
	print " Paper";
}
?>
