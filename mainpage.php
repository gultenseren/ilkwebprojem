	
<?php 
	ob_start();
	session_start();

	if(isset($_SESSION["uye"])){
		
		include("connect.php");
		$username = $_SESSION["uye"];
			
	} else{
		 echo "<script>alert('oturum yook'); </script>";
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/mainpage.css"/>
	
	<link rel="stylesheet" href="css/courselist.css"/>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
	 <link rel="stylesheet" id="themeStyles" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"/> 
	
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" ></script>   
	
	
<title>MainPage</title>
</head>

<body>
	
	
   
	  	  <!-- Modal Logout-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Logout</h4>
                </div>
                <div class="modal-body">
                   <p>Are you sure you want to log out ?</p>
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="logout.php" class="btn btn btn-default" >Yes </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

	<!----------------------------------------------------------------------------------------------->

 	
 
<div id="menu">
<ul>
	<li><a href="#"><img src="images/sstudent.png">Student</a>
		<ul>
			<li><a href="managestudent.php"><img src="images/manage.png">Manage Student</a></li>
		</ul>
	</li>
	
	<li><a href="#"><img src="images/mcourse.png">Course</a>
		<ul>
			<li><a href="managecourse.php"><img src="images/ccourse.png">Manage Course</a></li>
			<li><a href="managecourselist.php"><img src="images/add-course.png">Manage Students in Course</a></li>
		</ul>
	</li>
	<li><a href="#"><img src="images/ggrade.png">Score</a>
		<ul>
			<li><a href="managescore.php"><img src="images/grade_icon.png">Manage Score</a></li>
		</ul>
	</li>
	
	<li id="login"><a href="" data-toggle="modal" data-target="#myModal"><img src="images/logout.png"><font id="username"><?php echo "$username"; ?></font></a></li>
	
 
</ul>
	
	
</div>
	
	

	
</body>
</html>
