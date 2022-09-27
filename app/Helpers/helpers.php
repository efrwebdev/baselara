<?php

if (! function_exists('debug')) {
    function debug($data=null) {
        if($data) {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }
}

if (! function_exists('d')) {
    function d($data=null) {
        debug($data);
    }
}


?>