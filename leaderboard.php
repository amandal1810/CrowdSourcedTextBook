<?php
	if (!isset($_SESSION)) {
  session_start();
}
?>
<head>
<meta charset='utf-8' />
<title>
Leaderboard
</title>
<link rel="stylesheet" href="css/topribbon.css">
<script type="text/javascript" src="js/signinpopup.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/backtotop.js"></script>

</head>
<body>
<style>
table {
	width:100%;
	
	word-wrap:break-word;
	
	padding:1%;

	
}
#table_wrapper
{
	background:white;
    margin:3%;
    min-height:400px;            
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.4);
    -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.4);
    box-shadow:0 0 20px rgba(0,0,0,0.4);
    height: auto;
}
td{
	padding-top: 1%;
	padding-right: 1%;
	border: 1px solid black;
}
tr{
	padding-top: 1%;
	border: 1px solid black;
}
</style>

	<?php include 'header.php'; ?>

<?php
echo '<div id="table_wrapper">
 	<table >
	<tr style="text-align:center">
	<th style="width:20px";>Sl.No.</th>
	<th style="width:150px";>Firstname</th>
	<th style="width:150px";>Lastname</th>
	<th style="width:100px";>Points</th>
	</tr>';
include 'dbconnect.inc.php';
$result=mysqli_query($link,"select * from credential order by points desc") or die ($conn_error_msg);
$count=1;
while($row=mysqli_fetch_array($result)){

    echo "<center>
    		<tr>
    		
    		<td>".$count."</td>	";
    		if($count<10)
    		{
    			echo "<td><b><center>".$row['firstname']."</center></b></td>";
    			echo "<td><b><center>".$row['lastname']."</center></b></td>
    					<td><b><center>".$row['points']."</center></b></td>";
    		}
    		else
    		{
    			echo "<td><center>".$row['firstname']."</center></td>";
    			echo "<td><center>".$row['lastname']."</center></td>
    					<td><center>".$row['points']."</center></td>";
    		}

    		echo "</center>";
    		echo "</tr>";

    $count++;	
}
echo '</table>';
?>
</div>
<a href="#" class="back-to-top">Back to Top</a>
<?php include 'footer.php';?>
</body>
</html>
