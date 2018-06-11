 <?PHP include("connect.php"); ?>	
<?php 
	session_start();

	if(isset($_SESSION["uye"])){
		
		include("connect.php");
		$username = $_SESSION["uye"];
		
	}else{
		echo "<script> window.location = 'index.php'; </script>";
	}

		
?>

<?php 


	$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

mysqli_set_charset($mysqli,"utf8");

mysqli_query($mysqli,'set names "utf-8"');

mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
	
	$query = "SELECT * FROM course;";

?>

<!doctype html>
<html>
   <head>
     <title>Manage Course</title>
	   <meta charset="utf-8">
		<link rel="stylesheet" href="css/managecourse.css"/>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   </head>
   <body>

 	
 
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
	
	<li id="login"><a href="logout.php"><img src="images/logout.png"><font id="username"><?php echo "$username"; ?></font></a></li>
 
</ul>
	
	
</div>
	
	
	<form id="courseinfo" method="post">
	
				
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;ID : </label><input type="text" id="id" name="id" maxlength="30"  size="30" readonly="readonly" /></br></br>
	
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name :</label><input type="text" id="coursename" name="coursename" maxlength="30"  size="30" /></br></br>
	
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hours : </label><input type="text" id="coursehours" name="coursehours" maxlength="2"  size="30" /></br></br><br><br>

				
    			<input type="submit" name="Remove" value="Remove" style="width: 90px; height: 30px; margin-left: 20px;"; />
				<input type="submit" name="Update" value="Update" style="width: 90px; height: 30px; margin-left: 20px;"; />
				<input type="submit" name="Insert" value="Insert" style="width: 90px; height: 30px; margin-left: 20px;"; />
		
	</form>
	
	<div id="coursetable">
	
			
			   <table id="course_table"  ">
            <thead>
                <th style="width: 15%;">ID</th>
                <th style="width: 70%;">Name</th>
                <th style="width: 15%;">Hours Name</th>
              

            </thead>

           <?php 
				   
												   
					if(isset($_POST["Remove"])==1 && $_POST["Remove"]=="Remove"){ 
							
						$id = $_POST['id'];
						deletee($id);
					
					}else if(isset($_POST["Update"])==1 && $_POST["Update"]=="Update"){ 
						
						$id = $_POST['id'];
						$coursename = $_POST['coursename'];
						$coursehours = $_POST['coursehours'];
					
						
						updatee($id,$coursename,$coursehours);
						
					}else if(isset($_POST["Insert"])==1 && $_POST["Insert"]=="Insert"){ 	
						
						$coursename = $_POST['coursename'];
						$coursehours = $_POST['coursehours'];
						
						
						insertt($coursename,$coursehours);
						
					}else{
						
						fillTable($query);
					}
				   
			?>
				 
					

	</div>
									   
		
</body>
</html>
								   

	
	 <?php
         
	function fillTable($query){
		
	
			$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
	
	$query = "SELECT * FROM course;";
		
		
	if($mysqli->multi_query($query))
	{
		
			$result = $mysqli->store_result();
		
		
			
			while($row = $result->fetch_assoc())
			{
				echo "<tr>";
				foreach($row as $v)
				{
					echo "<td>".$v."</td>";
				}
				echo "</tr>";
			}
		
	}
	}

	

            ?>
	
<?php

	   
function deletee($id){
	
	
		if($id==null || $id==''){
			echo "<script>alert('choose a course from the table!'); </script>";
			$query = "SELECT * FROM course;";
			
			fillTable($query);
		}else{
		
			$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");
			
			mysqli_query($mysqli,"DELETE FROM course WHERE id=$id");
			
			$query = "SELECT * FROM course;";
			
			fillTable($query);
			
		}
}
	function updatee($id,$coursename,$coursehours){
		
		
		if($id==null || $id==''){
			echo "<script>alert('choose a course from the table!'); </script>";
			$query = "SELECT * FROM course;";
			
			fillTable($query);
		}else{
		
			$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");
			
			mysqli_query($mysqli,"UPDATE course SET label='$coursename',hours_number='$coursehours' WHERE id=$id");
			
			$query = "SELECT * FROM course;";
			
			fillTable($query);
		}
	}	
	function insertt($coursename,$coursehours){
		
		
		if($coursename==null || $coursename=='' || $coursehours==''|| $coursehours==''){
			
			echo "<script>alert('do not leave free space'); </script>";
			$query = "SELECT * FROM course;";
			
			fillTable($query);
		}else{
		
			$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");
			
			mysqli_query($mysqli,"INSERT INTO course(label, hours_number) VALUES('$coursename','$coursehours')");
			
			$query = "SELECT * FROM course;";
			
			fillTable($query);
		}
	}										

?>



     <script>
    
                var table = document.getElementById('course_table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("id").value = this.cells[0].innerHTML;
                         document.getElementById("coursename").value = this.cells[1].innerHTML;
                         document.getElementById("coursehours").value = this.cells[2].innerHTML;
						
					
                    };
                }
    
         </script>
														 

								
<script>
	function cleanTable(){
		var l=document.getElementById("course_table").rows.length;
		
		for(var i = l - 1; i > 0; i--){
    document.getElementById("course_table").deleteRow(i);
}
	}
</script>
												 
