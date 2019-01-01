<?php
    $persons = ["personone" => "mgmg", "persontwo" => "aungaung", "personthree" => "mgmg"];
    print_r(array_unique($persons));

    // output
    //Array ( [personone] => mgmg [persontwo] => aungaung )

    echo "<hr>";


    $language1 = array ("angular", "vue","react");
    $language2 = array("php", "nodeJS","python");
    $language = array_merge($language1, $language2);
    print_r($language);

?>