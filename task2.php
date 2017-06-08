<?php 
echo "\n function sort \n";

$arr[4] = 1;
$arr[8] = 2;
sort( $arr );
print_r( $arr );
unset( $arr );

echo "\n function array_values \n";         
$arr[4] = 1;
$arr[8] = 2;

print_r( array_values( $arr ));             //Selects all array values
