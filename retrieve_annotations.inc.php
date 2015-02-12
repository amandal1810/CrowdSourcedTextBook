
<?php

//retrieveing annotations from the content table to display in the annotation pannel
require 'dbconnect.inc.php';
session_start();
$art=$_SESSION['art'];
$stpos=intval($_GET['text']);
//$result=mysqli_query($link,"select * from content where '$stpos'>=spos and '$stpos'<=epos order by text,votes desc");
$result=mysqli_query($link,"select * from content where '$stpos'>=spos and '$stpos'<=epos and article='$art' order by text,votes desc");
$i=0;
$id=null;
while($row=mysqli_fetch_array($result)){
   
    $id[$i]=$row['id'];
   	$i++;
}


$_SESSION['id']=$id;
mysqli_close($link);


include 'show_annotations.php';



?>
