<?php
include("dbconnect.php");
$sql="select name from product;";
$result=$conn->query($sql);
while($row = mysqli_fetch_array($result)){
	$a[]=$row['name'];
}
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "no product" : $hint;
?>