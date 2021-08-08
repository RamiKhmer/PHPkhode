<?php 


$arr = ["name"=>"khode",12, false];

$arrBa = serialize($arr);

echo $arrBa;

$a = unserialize($arrBa);



?>

<pre>

<?php 

print_r($a);

?>

</pre>