<?php
    function search($arr, $x) {
        for($i = 0; $i < sizeof($arr); $i++) {
            if($arr[$i] == $x) 
                return $i;
        }
        return "no element found";
    }
    $arr = array(4, 2, 5, 6, 'k', 'a', 15, 3);
    $ele = $_GET['ele'];
    echo search($arr, $ele);
?>