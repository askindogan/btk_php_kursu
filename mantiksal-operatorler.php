<?php
/*
and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x	True if $x is not true
*/

$age = 20;
$graduation = "highschool";

$result = ($age >= 18) and ($graduation == "highschool");

//and
// false & false => false
// true & false => false
// true & true => true

//or
// true & false => true
// true & true => true
// false & false => false

$result = ($age >= 18) and ($graduation == "highschool" or $graduation == "master" or $graduation == "university");

//xor
// true & false => true
// true & true => false
// false & false => false

//not
$result = !(false);


echo var_dump($result);

