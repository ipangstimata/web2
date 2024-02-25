<?php
//Membuat Array

//Cara 1
$hari = array("senin","selasa","rabu","kamis","jum'at","sabtu","minggu");
print_r($hari);
var_dump($hari);

//Cara 2
$hari2 = ["senin","selasa","rabu","kamis","jum'at","sabtu"];
$hari2 =["minggu"];
print_r($hari2);
var_dump($hari2);

//cara 3
print_r($hari);
$hari[] = "kamis";
echo "<br>";
print_r($hari);
?>