<?php

require('./cngn.php');

$x = new CNGN(5); 

$string = "inadeio {x0} {x1} {x2} {x3} {x4}";
$x->load_vars(["f", "123", 2 => "efd", 3 => "3", 4 => "d"]);
$string = $x->stringParse($string);
echo $string . " ";
$x->add_vars(3);
// quotient rule, divide, >=, $s1 || $s2 
$j = "000100 001010 001101 100100";
$x->set_f_of('1 - 3 + {x}');
$x->set_g_of('1 + {x} + 20');
$seq = [6, 10, 35, 30, 10, 4, 5];
$x->x($j, $seq);

echo " " . json_encode($x->sigma);
$x->sigma = [];
echo "\n" . $x->condition;
?>