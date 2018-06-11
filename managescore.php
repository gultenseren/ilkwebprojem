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


		 $course=mysqli_query($mysqli,"SELECT label FROM course");
	

		$yourArray = array(); // make a new array to hold all your data


		$index = 1;
		while($row = mysqli_fetch_array($course)){ // loop to store the data in an associative array.
			 array_push($yourArray,$row[0]);
			 $index++;
			
		}
		$newArray=array();
		foreach($yourArray as $name => $sound){
			 array_push($newArray,$sound);
			
			
		}


$enyeni=array();


for( $i=0; $i<count($yourArray); $i++){
	
	array_push($enyeni,$yourArray[$i]);
	
}




function get_options($select){

		$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

				mysqli_set_charset($mysqli,"utf8");

				mysqli_query($mysqli,'set names "utf-8"');

				mysqli_query($mysqli,"SET CHARACTER SET utf-8");

			if($mysqli->connect_errno)
				die("Connection failed".$mysqli->connect_error);


		 $course=mysqli_query($mysqli,"SELECT label FROM course");
	

		$yourArray = array(); // make a new array to hold all your data


		$index = 1;
		while($row = mysqli_fetch_array($course)){ // loop to store the data in an associative array.
			 array_push($yourArray,$row[0]);
			 $index++;
			
		}
		$newArray=array();
		foreach($yourArray as $name => $sound){
			 array_push($newArray,$sound);
			
			
		}


$enyeni=array();


for( $i=0; $i<count($yourArray); $i++){
	
	array_push($enyeni,$yourArray[$i]);
	
}




$selected='';
	
		
		
	
		
		$options='';
		while(list($k,$v)=each($enyeni)){
			if($select==$k){
				$options.='<option value="'.$k.'" selected>'.$v.'</option>';
		
				
			}else{
				$options.='<option value="'.$k.'">'.$v.'</option>';
			}
			
			
		}
		return $options;
	}




if(isset($_POST['countries'])){
	
	$selected=$_POST['countries'];
	
}


	?>

<?php 

	$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

mysqli_set_charset($mysqli,"utf8");

mysqli_query($mysqli,'set names "utf-8"');

mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);


 $course=mysqli_query($mysqli,"SELECT * FROM course");

$options="";
while($row=mysqli_fetch_array($course)){
	
	$options=$options."<option>$row[1]</option>";
	
}
 
		

?>

			 	
		 	<?php

					$coursename2="";
	
		 						if(isset($_POST['countries'])){
							
									$selected=$_POST['countries'];
									$coursename=$enyeni[$selected];
									
		
								}else if(isset($_POST['studentid'])){
									$coursename2=$_POST['course'];
									$selected=array_search($_POST['course'], $enyeni);
									$coursename=$enyeni[$selected];
									
								}else{
									
									$coursename=$enyeni[0];
									
				
								}
	
				   	?>
	
				   	




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/managescore.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	
<title>ManageScore</title>
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
	
	
	
	<div id="choosecourse" >
	<form  id="search" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
	
		
		<label>Course : </label> <select  style="width: 500px;"  name="countries" id="list"  onChange="this.form.submit();"><?php echo get_options($selected); ?>
				</select></br></br>
	</form>			
	</div>
	


	<div id="courseinfo">			
	<form id="stdinfo" method="post">
		
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course :</label><input type="text" id="course" name="course" maxlength="10"  size="30" value="<?php echo $coursename2;?>" readonly="readonly" /></br></br>
		
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;ID : </label><input type="text" id="studentid" name="studentid" maxlength="10"  size="30" readonly="readonly" /></br></br>
	
				<label>First Name : </label><input type="text" id="name" name="name" maxlength="10"  size="30" readonly="readonly" /></br></br>
	
				<label>&nbsp;Last Name : </label><input type="text" id="lastname" name="lastname" maxlength="10" readonly="readonly" size="30" /></br></br>

				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Score : </label><input type="text" id="score" name="score" maxlength="2"  size="30" /></br></br><br><br><br>


				<button type="submit">UPDATE</button>

				
	</form>	
	</div>
	

	<div id="studentinfo">
	 <table id="table">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
				<th>Score</th>
               

            </thead>
			
					<?php
		 
		 					
		 				fillTable($coursename);
							
					 ?>
				   
			</table>
 
		   </div>		


	
</body>
</html>


<?php

	function fillTable($coursename){
	
		$selectCourse = $coursename;
			$coursename2="";
		
		$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
		
		
			if(isset($_POST['studentid'])){
			
									
				if($_POST['studentid']=="" || $_POST['studentid']==null){
					
					echo "<script> alert('choose student to update');</script>";
					
				}else{

							if($mysqli->connect_errno)
								die("Connection failed".$mysqli->connect_error);

							$studentid=$_POST['studentid'];
							$score=$_POST['score'];
							$selectCourse=$_POST['course'];
							$coursename2=$_POST['course'];;
	
							$query = "UPDATE `coursestudent` SET `score`=$score WHERE `student_id`=$studentid AND `course_name`='$selectCourse'";
								
								mysqli_query($mysqli, $query);
								
				}

						}
								
	
			
			$query = "SELECT student_id,student_name,student_lastname,score from coursestudent WHERE course_name='$selectCourse'";
		
	
	
	
		
		
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

          



  <script>
    
	  			var coursename="<?php echo $coursename; ?>";
                var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         
						 document.getElementById("course").value =coursename;
                         document.getElementById("studentid").value = this.cells[0].innerHTML;
                         document.getElementById("name").value = this.cells[1].innerHTML;
                         document.getElementById("lastname").value = this.cells[2].innerHTML;
						 document.getElementById("score").value = this.cells[3].innerHTML;
						 
						 
						
					
                    };
                }
    
   </script>

 
