<!-- this file is used to display the username and logout option
if the user has logged in or else sign in and signup option  -->


<?php
//session_start();
if(!isset($_SESSION['emaild']))
{
    echo '<li><a href="signup.php">Sign Up</a></li>
                        <li><a href = "javascript:void(0)" onclick = "document.getElementById(';
    echo "'light').style.display='block';document.getElementById('fade').style.display='block'";
    echo '">Sign In</a>
                        </li>

                    </ul>


            

                    </div>  
                    </div>
                    <!-- popup of signin-->
                    <div id="light" class="white_content"><br><center>
                        <form id="signinform">Sign in to continue...<br>
                            Username:<br><input type="text" id="username" width="250%"><br><br>
                            Password:<br><input type="password" id="password"><br><br>
                            <input type="button" name="signin" value="SIGN IN" onclick="post();"><br>

                            <a href = "javascript:void(0)" onclick = "document.getElementById(';
    echo "'light').style.display='none';document.getElementById('fade').style.display='none'";
    echo '">Close
                            </a>
                        </form></center>      
                    <div id="result"></div>  
                    
                   
                    </div>
                    <div id="fade" class="black_overlay">
                        
                    </div>';
    }

elseif(isset($_SESSION['emaild']))
{
    
    $name=$_SESSION['emaild'];
    echo '<li style="color:white;">'.$name.'</li>
          <li><a href="logout.php">Logout</a></li>
          </ul>
          </div> </div>';
}

?>
