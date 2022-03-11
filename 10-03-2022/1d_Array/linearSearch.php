<?php
    function l_search($arr, $x) {
        for($i = 0; $i < sizeof($arr); $i++) {
            if($arr[$i] == $x) 
                return "$x is present in  $i index";
        }
        return "no element found";
    }
    $arr = array(4, 2, 5, 6, 'k', 'a', 15, 3);
    $ele = "k";
    echo l_search($arr, $ele);
?>