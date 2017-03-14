<?php
// [[year? &start=`2015`]]
if ($start && date("Y") != $start) {
	$output = $start.'—'.date("Y");
} else {
	$output = $start;
}
return $output;
