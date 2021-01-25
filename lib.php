<?php
date_default_timezone_set('America/New_York');

function default_date() {
  return "this week Monday";
}
function next_week_date() {
  return "Monday next week";
}

function to_datetime($x) {
  $x = strtotime($x);
  return new DateTime("@" . $x);
}

function default_date_time() {
  $date = default_date();
  $present = strtotime($date);

  return new DateTime("@" . $present);
}

// http://stackoverflow.com/questions/1897727/get-first-day-of-week-in-php
function firstDayOfWeek($day="") {
  if ( $day == "" ) {
    $day = default_date_time();
  }

  return $day->format('M d, Y');
}


function paper_or_plastic($date="") {
  if ( $date == "" ) {
    $date = default_date();
  }
  $plastic = 1;

  // dec 30th 2013 is a paper week
  // date math isn't inclusive so go one more day back
  $base = new DateTime('2013-12-29 00:00:00');
  
  $present = strtotime($date);
  $monday = new DateTime("@" . $present);
  
  $interval  = $base->diff($monday);
  $days_elapsed = $interval->days;
  $weeks = floor(abs($days_elapsed / 7));
  
  if ( $weeks % 2 == $plastic ) {
    return "Plastic";
  }
  else {
    return "Paper";
  }
}
?>
