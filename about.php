<!-- This file has the details of the project team and only the admin can see 
  logs and active users-->

<!DOCTYPE html>
<html>
<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<title>About</title>
<head>
<link rel="stylesheet" href="css/topribbon.css">

<script type="text/javascript" src="js/signinpopup.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/backtotop.js"></script>

</head>

<body>
<style type="text/css">
       
        #img{
               -moz-box-shadow:0 0 10px rgba(0,0,0,0.4);
                -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.4);
                box-shadow:0 0 10px rgba(0,0,0,0.4);
              
                
                margin-top: 3%;
                margin-left: 3%;
                margin-right: 3%;
              
        }
        #content{
                background:white;
                margin:3%;
                padding: 30px 30px 30px 30px;
                -moz-box-shadow:0 0 20px rgba(0,0,0,0.4);
                -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.4);
                box-shadow:0 0 20px rgba(0,0,0,0.4);
              
               
        }
                }
        p{
                padding: 0px 30px 0px 30px;
        }
        h3{
                margin-top:40px;
        }
        li{
                padding:5px;
          }
          h1,h2,h3{
        font-family: 'Gothic',sans-serif;
        font-weight:800;
       }

       
  
</style>

<?php include 'header.php'; ?>


<div id="img">
<img border="0" src="static/about.png"  width="100%" height="200px" align="center">
</div>

<div id="content">
  <p>
      We are a group of motivated young students working on the topic of crowd sourcing. We have created this tool to aid us in the better understanding of the dynamics and functioning of annotations and teh addition of annotations causes the enhancement of the knowledge base.

      <br><br>This project would never have been possible without the able and enthusiastic guidance of
      <a href="http://www.iitrpr.ac.in/cse/sudarshan" target="_blank">Prof. Dr. Sudarshan Iyengar</a> ,
      <a href="http://pec.ac.in/~pecac/new/poonam-saini/" target="_blank">Prof. Dr. Poonam Saini</a> and
      <a href="http://in.linkedin.com/pub/anamika-chhabra/18/33a/929" target="_blank">Ms. Anamika Chhabra</a>.
  </p>
  <p>Here's the list of programmers involved in this project:</p>


  <center>
    <div id="table" style="padding-left:40px;">
        <table cellpadding="10px" border="1px">
            <div id="heading">
              <tr>
                <th>Name</th>
                <th>College</th>
              </tr>
            </div>
            <div id="rows">
                <tr>
                  <td>Abhisek Mandal</td>
                  <td>NIT Durgapur</td>
                </tr>
                <tr>
                  <td>Deepanshi Dhamija</td>
                  <td>PEC University of Technology, Chandigarh</td>
                </tr>
                <tr>
                  <td>Pakshal H Dhelaria</td>
                  <td>PES University Bangalore</td>
                </tr>
                <tr>
                  <td>Rajesh Shreedhar Bhat</td>
                  <td>PES University Bangalore</td>
                </tr>
                <tr>
                  <td>Sushant Sharma</td>
                  <td>PEC University of Technology, Chandigarh</td>
                </tr>
                <tr>
                  <td>Vijay Kumar</d>
                  <td>PES University Bangalore</td>
                </tr>
            </div>
          </table>
          </div>
        </center>

<h3>Code Raw Materials used to Cook this Project...</h3>
<p>Our project employs no complex frameworks or any major pre-built code packages. For our web-app programming, we have used:
<ul>
<li><b>HTML5</b> : to create the basic webpages.</li>
<li><b>CSS3</b> : for styling the webpages.</li>
<li><b>JavaScript</b> : to create the front-end of the web-app.</li>
<li><b>jQuery</b> : also, to create the front-end but for more complex user interactions.</li>
<li><b>PHP</b> : for the server side communication, backend operations and interaction with the database.</li>
<li><b>MySQL</b> : the database system used.</li>
<li><b>AJAX</b> : for a much better user experience by enabling server side operations without refreshing the page.</li>
</ul>
</p>
<?php 
if(isset($_SESSION['emaild']) && $_SESSION['emaild']=='admin@admin.com')
{
    echo '<p>Take a peek at our data mining: 
         <br>  <a href="wikilog.php">Log for current annotation</a>
        <br>  <a href="wikilog_edits.php">Complete Log for annotation with edits </a>
        <br> <a href="display_active_users.php">Currently Active users </a>
        </p>';
}

?>

</div>
<a href="#" class="back-to-top">Back to Top</a>
<?php include 'footer.php';?>
</body>
</html>
