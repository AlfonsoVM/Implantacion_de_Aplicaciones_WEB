<?php
    echo "<pre>";
    $a=array("4","8","1");
    echo $a[0] . "\n" . $a[1] . "\n";
    print_r($a);

    $b=array("hola", 3 , 3.14 ,array("abc","xyz"),"45");

    print_r($b);
    

    // Array asociativo:
    $c = array(
        '14' => 3345,
        'a' => "v2",
        '3' => "v3",
        '41' => $a
    );
    print_r($c);
    echo $c['a'];
    echo "</pre>";
    // mirar funciones para array:
    is_array($c);
    // array_slice array_.....
?>