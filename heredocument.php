<?php

// --------------------------------------
// here document
// --------------------------------------


// Simple string usage
$headerOne = "<h2>Web Programming Channel</h2>";
echo $headerOne;



// Using here document
$headerTwo = <<<header
<h2>Web Programming Channel</h2>
header;

echo $headerTwo;


?>