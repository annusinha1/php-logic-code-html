<?php
//numeric array
// $name = array(1 =>"ab", 2 =>"bc", 3 =>"cd", 4 =>"ef", 5=>"gh");
// echo $name[5];

//associative array
// $name = array("ab"=>"girl", "bc"=>"boy","cd"=>"male","ef"=>"female");
// print_r($name);
// echo"ab is a" .$name["cd"];

//multi-dimensional array
$film=array(

                "comedy" => array(

                                0 => "Pink Panther",

                                1 => "john English",

                                2 => "See no evil hear no evil"

                                ),

                "action" => array (

                                0 => "Die Hard",

                                1 => "Expendables"

                                ),

                "epic" => array (

                                0 => "The Lord of the rings"

                                ),

                "Romance" => array

                                (

                                0 => "Romeo and Juliet"

                                )

);
echo $film["epic"][0];
?>