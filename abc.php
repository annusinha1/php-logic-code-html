<?php

// /* function argument By Value */
// // function testing(&$string)
// // {
// //     $string .= 'and something extra.';
// // }
// // $str = 'This is a string, ';
// // testing($str);
// // echo $str;


// /* function argument By Reference*/

// function first($num) {
//   $num += 5;
// }
// function second(&$num) {
//   $num += 6;
// }
// $number = 10;
// first( $number );
// echo "Original Value is $number<br />";
// second( $number );
// echo "Original Value is $number<br />";

function sum ($Annu,$Ashu,$Suraj){
    $aas = $Annu+$Ashu+$suraj;
    return $aas;
}
$total =sum(55,65,88);
echo $total ."<br>";

function percentage($as){
    $per =$as/3;
    echo $per. "%";
}
percentage($total);
?>