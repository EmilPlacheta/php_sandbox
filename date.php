<?php

/* 
////DATE
*/

echo date('d') . "/" . date('m') . "/" .  date('y'), '<br />';
//capital letters change the format
echo date('D/M/Y'), '<br />';
echo date('D-M-Y'), '<br />';
echo date('D M Y'), '<br />';

// l displays day of the week
echo date('l'), '<br />';
//time
echo date('h'), '<br />'; //hour
echo date('i'), '<br />'; //minute
echo date('s'), '<br />'; //second
echo date('a'), '<br />'; //am or pm

//small gotcha, time might be wrong, depends on the php servers time zone, need to set time zone
echo date('h:i:s:a'), ", before setting time zone", '<br />';

//set time zone
date_default_timezone_set('Europe/London');
echo date('h:i:s:a'), ", after setting time zone", '<br />';
