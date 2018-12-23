<?php


$str = 'Web Programming Channel';

// check if 'Programming' contain in above string
$result1 = preg_match('/Pro/',$str);
echo $result1 ? 'Yes' : 'No';

echo "<hr>";

// check if 'Web' start in above string
$result2 = preg_match('/^Web/',$str);
echo $result2 ? 'Yes' : 'No';

echo "<hr>";

// check if 'Web' start in above string
$result3 = preg_match('/Channel$/', $str);
echo $result3 ? 'Yes' : 'No';

?>