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

    echo "<hr>";

    $person1 = array("name" => "htetlinthu", "job" => "web-developer", "city" => "yangon", "age" => 23);
    $person2 = array("name" => "htetlinthu", "nativetown" => "yangon", "age" => 23);

    $result=array_diff($person1,$person2);
    print_r($result);

    echo "<hr>";

    $result = array_diff_assoc($person1, $person2);
    print_r($result);

    echo "<hr>";

    $result = array_diff_key($person1, $person2);
    print_r($result);

?>