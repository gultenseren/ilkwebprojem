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

$yyy="sereeen";
$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

				mysqli_set_charset($mysqli,"utf8");

				mysqli_query($mysqli,'set names "utf-8"');

				mysqli_query($mysqli,"SET CHARACTER SET utf-8");

			if($mysqli->connect_errno)
				die("Connection failed".$mysqli->connect_error);


		 $course=mysqli_query($mysqli,"SELECT label FROM course");
		 $idler=mysqli_query($mysqli,"SELECT id FROM course");



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

//----------------------------------------------------------------------------------------------



$enyeni=array();


for( $i=0; $i<count($yourArray); $i++){
	
	array_push($enyeni,$yourArray[$i]);
	
}




function get_options($select){

		$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

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

	$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manage Course List</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/courselist.css"/>
	<script src="script/managecourselist.js"></script>
	
	<link rel="stylesheet" href="css/courselist.css"/>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
	 <link rel="stylesheet" id="themeStyles" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"/> 
	
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" ></script>   
	   
	   	
	
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
	
	
</div><br>
	
	
		<div id="butoon">
			<img src="images/addiconu.png" onClick="addButonu();" >
			<img src="images/deleteiconu.png" onClick="deleteButonu();">
		</div><br>
	
	
	<div id="tablestudent">
	
			<form id="search" method="">
				
				<label>Search Value : </label><input type="text" id="searchvalue" name="searchvalue" maxlength="10"  size="50" /></br></br>
			</form>

			<div id="table">
			
			   <table id="students_table">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                

            </thead>
				   <?php 
				   
							if(isset($_POST['countries'])){

						$selected=$_POST['countries'];
						

						$coursename=$enyeni[$selected];
								
							fillTable($coursename);

						}else{
							
							$coursename=$enyeni[0];
								
							fillTable($coursename);
						}
				   		

				   ?>
											
			</table>
 
		   </div>		

	</div>
	
	
	<div id="tablecourse">
	
			<form  id="search" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				
				<label>Course : </label> <select  style="width: 400px;"  name="countries" id="list" onChange="this.form.submit();"><?php echo get_options($selected); ?>
				</select></br></br>
			</form>

			<div id="table">
			
			   <table id="course_table">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
               

            </thead>
			 		<?php
	
						if(isset($_POST['countries'])){

						$selected=$_POST['countries'];
						

						$coursename=$enyeni[$selected];
								
							fillcourseTable($coursename);

						}else{
							
							$coursename=$enyeni[0];
								
							fillcourseTable($coursename);
						}
				   		

				   	?>
				   
			</table>
 
		   </div>		

	</div>


<?php 

if(isset($_POST['search']) ){
 	echo "<script>alert('choose a student from the table!'); </script>";

}



?>





 <?php

function fillcourseTable($coursename){
	
	
	
			$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
	
	
	$courseid=mysqli_query($mysqli,"SELECT id FROM course WHERE label='$coursename'");
	
	$cArray=array();
	
	
		while($row = mysqli_fetch_array($courseid)){ // loop to store the data in an associative array.
			 array_push($cArray,$row[0]);
	}
	$cid=$cArray[0];
	
	

	
	$query = "SELECT id,first_name,last_name FROM enroll AS c JOIN student AS s ON c.student_id=s.id WHERE c.course_id=$cid";
		
		
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

         
	function fillTable($coursename){
	
		$coursename=$coursename;
			$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
		
			
	$courseid=mysqli_query($mysqli,"SELECT id FROM course WHERE label='$coursename'");
	
		$cArray=array();
	
	
		while($row = mysqli_fetch_array($courseid)){ // loop to store the data in an associative array.
			 array_push($cArray,$row[0]);
	}
	$cid=$cArray[0];
	echo $cid;
	
	$query = "SELECT id,first_name,last_name FROM student WHERE id NOT IN (SELECT student_id FROM enroll  WHERE course_id=$cid)";
	
		
		
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

	
</body>
</html>
		
<script>
   // Write on keyup event of keyword input element
   $(document).ready(function(){
     $("#searchvalue").keyup(function(){
     _this = this;
    
     // Show only matching TR, hide rest of them
     $.each($("#tablestudent tbody tr"), function() {
       if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
       {  
           $(this).hide();
       }
       else
       {
          $(this).show();
       }
     });
  });
});
</script>


  <script type="text/javascript">
	  
	 	var sag=0;
	  var sol=0;
	  var rowTable='';
	  var indexsag,indexsol;
	  var id,firstname,lastname;
	  
	
	  
        $(document).ready(function () {
            $('#students_table tr').click(function () {
                $('#students_table tr').css('background-color','');
				  $('#course_table tr').css('background-color','');
                $(this).css('background-color', 'red');
				rowTable='students_table';
 				sol++;
				sag=0;
				indexsol=this.rowIndex;
				indexsag='';
				id=this.cells[0].innerHTML;
				firstname=this.cells[1].innerHTML;
				lastname=this.cells[2].innerHTML;
				
				
            });
        });
	  
	  
	  $(document).ready(function () {
            $('#course_table tr').click(function () {
                $('#course_table tr').css('background-color','');
				$('#students_table tr').css('background-color','');
                $(this).css('background-color', 'red');
				rowTable='course_table';
 				sag++;
				sol=0;
				
				indexsag=this.rowIndex;
				indexsol='';
				
				id=this.cells[0].innerHTML;
				firstname=this.cells[1].innerHTML;
				lastname=this.cells[2].innerHTML;
				
				  
            });
        });
	
    </script>

<script>

	function addButonu(){
		
		var addMessage='';
		
		if(sol==0 && sag==0){
		   
		   alert('choose student');
		   }else if(sol==0 ){
				alert('choose student other table to add');	
					}
			else{
		
		var index,table=document.getElementById('students_table');
	
			table.deleteRow(indexsol);
		
		
		var tablesag=document.getElementById('course_table');
		
		var newRow=tablesag.insertRow(1);
		
		var cel1 = newRow.insertCell(0);
		var cel2 = newRow.insertCell(1);
		var cel3 = newRow.insertCell(2);
		
		cel1.innerHTML=id;
		cel2.innerHTML=firstname;
		cel3.innerHTML=lastname;
				
				var idd= id;
				var fname=firstname;
				var lname=lastname;
				
		var e = document.getElementById("list");
		var coursename = e.options[e.selectedIndex].text;
				
	
		$(document).ready(function(){
   
        
        $.ajax ({
            url: "managecourselist.php",
            data: { id : idd , firstname :fname , lastname : lname , coursename : coursename , addMessage : addMessage },
            success: function( result ) {
               
            }
        
    });
});
			}

		sol=0;
		sag=0;
	}
		
	
	
	function deleteButonu(){
		
		var deleteMessage='';
		
		if(sol==0 && sag==0){
		   
		   alert('choose student');
		   }else if(sag==0 ){
				alert('choose student from other table to delete');	
					}
			else{
		
		var index,table=document.getElementById('course_table');
	
			table.deleteRow(indexsag);
		
		
		var tablesol=document.getElementById('students_table');
		
		var newRow=tablesol.insertRow(1);
		
		var cel1 = newRow.insertCell(0);
		var cel2 = newRow.insertCell(1);
		var cel3 = newRow.insertCell(2);
		
		cel1.innerHTML=id;
		cel2.innerHTML=firstname;
		cel3.innerHTML=lastname;
				
				var idd= id;
				var fname=firstname;
				var lname=lastname;
				
		var e = document.getElementById("list");
		var coursename = e.options[e.selectedIndex].text;
				
	
		$(document).ready(function(){
   
			var student="";
        
        $.ajax ({
            url: "managecourselist.php",
            data: { id : idd , student : student , coursename : coursename , deleteMessage : deleteMessage},
            success: function( result ) {
               
            }
        
    });
});
			}
		
		sol=0;
		sag=0;

	}
		
	

	
</script>
	

<?php

if(isset($_GET['addMessage'])){
	
$idd= $_GET['id'] ;
$namee= $_GET['firstname'] ;
$lastnamee= $_GET['lastname'] ;
$coursee= $_GET['coursename'] ;

$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

				mysqli_set_charset($mysqli,"utf8");

				mysqli_query($mysqli,'set names "utf-8"');

				mysqli_query($mysqli,"SET CHARACTER SET utf-8");

			if($mysqli->connect_errno)
				die("Connection failed".$mysqli->connect_error);
	
	
	$courseid=mysqli_query($mysqli,"SELECT id FROM course WHERE label='$coursee'");
	
	$cArrayy=array();
	
	
		while($row = mysqli_fetch_array($courseid)){ // loop to store the data in an associative array.
			 array_push($cArrayy,$row[0]);
	}
	$cid=$cArrayy[0];
	

$qqq= "INSERT INTO `enroll`(`student_id`, `course_id`, `score`) VALUES ($idd,'$cid',0)";

	mysqli_query($mysqli,$qqq);
	

}

if(isset($_GET['deleteMessage'])){
	
$idd= $_GET['id'] ;
$coursee= $_GET['coursename'] ;

$mysqli = new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

				mysqli_set_charset($mysqli,"utf8");

				mysqli_query($mysqli,'set names "utf-8"');

				mysqli_query($mysqli,"SET CHARACTER SET utf-8");

			if($mysqli->connect_errno)
				die("Connection failed".$mysqli->connect_error);
	
	
	$courseid=mysqli_query($mysqli,"SELECT id FROM course WHERE label='$coursee'");
	
	$cArray=array();
	
	
		while($row = mysqli_fetch_array($courseid)){ // loop to store the data in an associative array.
			 array_push($cArray,$row[0]);
	}
	$cid=$cArray[0];
	

$qqq= "DELETE FROM enroll WHERE student_id=$idd AND course_id='$cid'";

	mysqli_query($mysqli,$qqq);
	

}


?>

