<?php
/**
 * Created by IntelliJ IDEA.
 * User: s.hitipeuw
 * Date: 06-12-18
 * Time: 15:37
 */



function only_this_get_params($this_get_params = []) {

    $allowed_get_array = [];

    foreach ($this_get_params as $param){

        if(isset($_GET[$param])){
            $allowed_get_array[$param] = $_GET[$param];
        } else {
            $allowed_get_array[$param] = NULL;
        }
    }

    return $allowed_get_array;
}


$get_params = only_this_get_params(['gebruikersnaam', 'wachtwoord']);
var_dump($get_params);
echo "<br />";


function is_not_empty($value) {
    $real_value = trim($value);


    return isset($real_value) && $real_value !== "";
}

function check_params_on_empty($check_params = []) {

    foreach ($check_params as $item) {

        if (is_not_empty($item)) {
            echo 'value: ' . $item;
        } else {
            echo 'No value';
        }
        echo "<br />";
    }

}


check_params_on_empty( $get_params );