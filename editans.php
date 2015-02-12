<?php
/* updates the table qanswers if the answer is modifed */
session_start();
require 'dbconnect.inc.php';
include 'mailtowatchers.php';

		$id=$_POST['annotationid']; //getting annotation id
		$user=$_SESSION['emaild'];  //getting email id from session
		$aid=$_POST['ansid'];
		$modified_answer=$_POST['value'];
//echo $hiddenid;
echo $modified_answer;

//fetch the annotation before updating
$result=mysqli_query($link,"select * from qanswer,content where annoid='$id' and ansid='$aid' and annoid=id");
$row=mysqli_fetch_array($result);
$oldanswer=$row['answer'];
$text=$row['text'];
$user=$_SESSION['emaild'];


//if modified and old answer are same to same
//alert the user to make changes or else update the
//edited answer in the database
if($oldanswer!=$modified_answer)
{
	$result1=mysqli_query($link,"select distinct emailid from content,watchers where text='$text' and id=fid ");
	//fetching the email id of all the watchers 
	while($row1=@mysqli_fetch_array($result1))
	{
		$emailid=$row1['emailid'];
		sendemail($emailid,$oldanswer,$modified_answer,$text);
	}
	$modified_answer = mysqli_real_escape_string($link,$modified_answer);
	mysqli_query($link,"update qanswer set answer='$modified_answer' where annoid='$id' and ansid='$aid' ") or die("could not update");
	mysqli_close($link);
	require 'dbconnect.inc.php';
	
	$check=mysqli_query($link,"select * from edit_logans where annoid='$id'and ansid='$aid' order by datetime desc");
	$latest=mysqli_fetch_array($check);
	
	$current=$latest['datetime'];
	$current_anno=$latest['ans'];
	
	mysqli_query($link,"update edit_logans set user='$user' where annoid='$id' and ans='$modified_answer'and ansid='$aid' and datetime='$current' ") or die(mysqli_error($link));
	mysqli_query($link,"update credential set points=points+0.5 where emailid='$user'");
}
else
	echo '<script>alert("You should make change to edit "); </script>';

mysqli_close($link);


?>
