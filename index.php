<!---slide show and some description related to the power of crowd
	is displayed here -->

<!DOCTYPE html>
<html lang='en'>
<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<head>
<meta charset='utf-8' />
<title>The Crowdsourced Textbook</title>
<link rel="stylesheet" href="css/topribbon.css">
<script type="text/javascript" src="js/signinpopup.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/backtotop.js"></script>
<script>
$(function(){
	$("#slideshowSection").load
	("slide.html");
});
</script>
</head>



<body>
	
	<?php include 'header.php'; ?>

	<style>
	h1,h2,h3{
		font-family: 'Gothic',sans-serif;
		font-weight:800;
	}
	h2{
		padding-left:6%;
		margin:2% 0px 2% 0px;
	}
	#content {
		background-color:white;
		-moz-box-shadow:0 0 20px rgba(0,0,0,0.4);
  		-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.4);
  		box-shadow:0 0 20px rgba(0,0,0,0.4);
		height:auto;
		min-height: 55%
		display:inline-block;
	}
	#description{
		float:right;
		margin:3%;
		word-wrap: break-word;
		width:35%;
		text-align: justify;
	}
	#slideshowSection{
		width:35%;
		margin:3%;
	}
</style>





<div id="content">

	<div id="slideshowSection"></div>
	
	<div id="description">
<p><i>"Sum is better than parts"</i> -des' Cartes 
<br><br>
The Wisdom of the Crowd is undeniable. Over the years, tasks achieved by a group of people collectively have been found to be much better than those tasks achieved individually. The knowledge of many common people is better than that of a wise man, in fields where such nominal estimations are achievable. 
<br>Hence, it is but obvious, that the knowledge of many wise men must be better than one wise man. It is in this context that we wish to explore the idea of Crowd-powered Textbooks, or rather, Crowdsourced Textbooks</p>
<p>Ever thought that your notes could be helpful to others? Your thoughts and ideas can enrich a knowledge base in unprecedented ways. So we bring you the The Crowdsourced Textbook... the text book where you enhance its quality by adding your notes in the form of annotations. </p>
<p>So go ahead and create an all new environment of knowledge!</p></div>


</div>


<a href="#" class="back-to-top">Back to Top</a>

<?php include 'footer.php';?>
</body>

</html>