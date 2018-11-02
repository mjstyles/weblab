<?php
$allthestates="mississippi alabama texas massachusetes kansas";
$statesarray=[];
$states1=explode(' ',$allthestates);
$i=0;
foreach($states1 as $state)
{
if(preg_match('/xas$/',($state)))
{
$statesarray[$i]=($state);
$i=$i+1;
print"\n the states that ends in xas:".$state;
}
}
foreach($states1 as $state)
{
if(preg_match('/^k.*s$/',($state)))
{
$statesarray[$i]=($state);
$i=$i+1;
print"\n the states that starts with k ends in s:".$state;
}
}
foreach($states1 as $state)
{
if(preg_match('/^m.*s$/',($state)))
{
$statesarray[$i]=($state);
$i=$i+1;
print"\n the states that starts with m ends in s:".$state;
}
}
foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
{
$statesarray[$i]=($state);
$i=$i+1;
print"\n the states that starts with k ends in s:".$state;
}
}
foreach($statearray as $element=>$value)
{
print("\n".$value."is the element".$element);
}
?>
