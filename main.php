<!-- selected article will be displayed with annotations and 
  option of adding annotation(popup which appears after selecting the text)-->

<!DOCTYPE html>
<html lang='en'>
<?php 
$art=$_GET['article'];
if (!isset($_SESSION)) { 
  session_start(); 
} 
//storing the article name in session
$_SESSION['art']=$art;
?>

<head>
<meta charset='utf-8' />
<title>The Crowdsourced Textbook</title>
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/base_annotator.js"></script>
<script type="text/javascript" src="js/signinpopup.js"></script>
<script type="text/javascript" src="js/alertnotsigned.js"></script>
<script type="text/javascript" src="js/suggestedit.js"></script>
<script type="text/javascript" src="js/watchers.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
<script type="text/javascript" src="js/backtotop.js"></script>
<script type="text/javascript" src="js/addanswer.js"></script>
<script type="text/javascript" src="js/suggesteditans.js"></script>
<script type="text/javascript" src="js/vote_incrm_forans.js"></script>
</head>


<body>

   <div id="page_header">
    <div id="logo">
        <img src="static/logo.png" width="250" height="90"/></div>
    <div id="links">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="help.php">Help</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="leaderboard.php">Leaderboard</a></li>

        <?php include 'signinstatus.php'; ?>
        
        

<div id="maintext" class="maintext" onmouseup='foo(this);'> 
  <!-- foo function is in base_annotator.js -->
    <div id="insidetext">

      <?php
            $art=$_SESSION['art'];
            $page='articles/'.$art.'.html';
            include $page;
        ?>
    </div>
</div>
<?php include 'tryingpop.html';?> 
<!-- this creates the popup and also fades the background when pop up appears-->

<?php include 'highlight_annotated.inc.php'; ?>

<aside>
  <div id="rightpanel" class="rightpanel" >
    <div id='annotation_panel_header' style="color:white;">ANNOTATIONS</div>
	<div id="txtHint">
	  <div style="font: italic 15px Verdana;  padding-left: 10px; padding-bottom: 5px; padding-top: 5px;">
            Click on a highlighted text portion to view its annotations! <br><br> Select a text range to add an annotation to it!
        </div>
	</div>
    </div>
</aside>
<a href="#" class="back-to-top">Back to Top</a>
<?php include 'footer.php';?>



<!--</div>-->

</body>

</html>
