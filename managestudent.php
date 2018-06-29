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

	$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

mysqli_set_charset($mysqli,"utf8");

mysqli_query($mysqli,'set names "utf-8"');

mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
	
	$query = "SELECT * FROM student;";

?>


<!doctype html>
<html>
   <head>
     <title>Manage Student</title>
	   <meta charset="utf-8">
		<link rel="stylesheet" href="css/managestudent.css"/>
	   
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
	
	
	<form id="studentinfo" method="post">
	
				
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;ID : </label><input type="text" id="id" name="id" maxlength="30"  size="30" readonly="readonly" /></br></br>
	
				<label>First Name : </label><input type="text" id="firstname" name="firstname" maxlength="30"  size="30" /></br></br>
	
				<label>&nbsp;Last Name : </label><input type="text" id="lastname" name="lastname" maxlength="30"  size="30" /></br></br>

				<div id=sex>
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<label>Female &nbsp; </label><input type="radio" name="gender" id="female" value="female" checked="checked" />&nbsp;&nbsp;&nbsp;&nbsp;
				<label>Male &nbsp; </label><input type="radio" name="gender" id="male" value="male"/>
				</div><br>

				
				<label>&nbsp;&nbsp;&nbsp;&nbsp;Birthday : </label><input type="date" id="birthday" name="birthday" maxlength="10"  size="30" style="width:240px;" /></br></br>
	
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone : </label><input type="text" id="phone" name="phone" maxlength="11"  size="30" /></br></br>
	
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address : </label>
				<textarea  name="address" id="address" rows="2" cols="32"  placeholder="Address.."></textarea><br><br><br><br>

				
    			<input type="submit" name="Remove" value="Remove" style="width: 90px; height: 30px; margin-left: 20px;"; />
				<input type="submit" name="Update" value="Update" style="width: 90px; height: 30px; margin-left: 20px;"; />
				<input type="submit" name="Insert" value="Insert" style="width: 90px; height: 30px; margin-left: 20px;"; />
		
	</form>
	
	<div id="studenttable">
	
			<form id="search" method="">
				
				<label>Search Value : </label><input type="text" id="searchvalue" name="searchvalue" maxlength="10"  size="70" /></br></br>
			</form>

			<div id="table">
			
			   <table id="students_table">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Birthdate</th>
                <th>Phone</th>
				<th>Address</th>

            </thead>

           <?php 
				   
												   
					if(isset($_POST["Remove"])==1 && $_POST["Remove"]=="Remove"){ 
							
						$id = $_POST['id'];
						deletee($id);
					
					}else if(isset($_POST["Update"])==1 && $_POST["Update"]=="Update"){ 
						
						$id = $_POST['id'];
						$first_name = $_POST['firstname'];
						$last_name = $_POST['lastname'];
						$sex = $_POST['gender'];
						$birthdate = $_POST['birthday'];
						$phone = $_POST['phone'];
						$address = $_POST['address'];
						
						updatee($id,$first_name,$last_name,$sex,$birthdate,$phone,$address);
						
					}else if(isset($_POST["Insert"])==1 && $_POST["Insert"]=="Insert"){ 	
						$id = $_POST['id'];
						$first_name = $_POST['firstname'];
						$last_name = $_POST['lastname'];
						$sex = $_POST['gender'];
						$birthdate = $_POST['birthday'];
						$phone = $_POST['phone'];
						$address = $_POST['address'];
						
					
								
						insertt($id,$first_name,$last_name,$sex,$birthdate,$phone,$address);
						
					}else{
						
						fillTable($query);
					}
				   
			?>
				 
				
				   </div>		

	</div>

	
	 <?php
         
	function fillTable($query){
	
			$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");

	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
	
	$query = "SELECT * FROM student;";
		
		
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
			echo "<script>alert('choose a student from the table!'); </script>";
			$query = "SELECT * FROM student;";
			
			fillTable($query);
		}else{
		
			$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");
			
			mysqli_query($mysqli,"DELETE FROM student WHERE id=$id");
			
			$query = "SELECT * FROM student;";
			
			fillTable($query);
			
		}
}
	function updatee($id,$first_name,$last_name,$sex,$birthdate,$phone,$address){
		
		
		if($id==null || $id==''){
			echo "<script>alert('choose a student from the table!'); </script>";
			$query = "SELECT * FROM student;";
			
			fillTable($query);
		}else{
		
			$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");
			
			mysqli_query($mysqli,"UPDATE student SET first_name='$first_name',last_name='$last_name', sex='$sex', birthdate='$birthdate', phone='$phone', address='$address'  WHERE id=$id");
			
			$query = "SELECT * FROM student;";
			
			fillTable($query);
		}
	}	
	function insertt($id,$first_name,$last_name,$sex,$birthdate,$phone,$address){
		
		if($id!=null || $id!=''){
			echo "<script>alert('This students id is already exist'); </script>";
			$query = "SELECT * FROM student;";
			fillTable($query);
		}
		
		
		else if($first_name==null || $first_name=='' || $last_name==''|| $last_name==''||
		  $sex==null || $sex=='' || $birthdate==''|| $birthdate==''||
		  $phone==null || $phone=='' || $address==''|| $address==''){
			
			echo "<script>alert('do not leave free space'); </script>";
			$query = "SELECT * FROM student;";
			
			fillTable($query);
		}else{
		
			$mysqli =  new mysqli("sql313.epizy.com","epiz_22222572","kaancetin123","epiz_22222572_stdmgdb");

			mysqli_set_charset($mysqli,"utf8");

			mysqli_query($mysqli,'set names "utf-8"');

			mysqli_query($mysqli,"SET CHARACTER SET utf-8");
			
			mysqli_query($mysqli,"INSERT INTO student(first_name, last_name, sex, birthdate, phone, address) VALUES ('$first_name','$last_name','$sex','$birthdate',$phone,'$address')");
			
			$query = "SELECT * FROM student;";
			
			fillTable($query);
		}
	}										

?>

	
</body>
</html>


     <script>
    
                var table = document.getElementById('students_table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         
                         document.getElementById("id").value = this.cells[0].innerHTML;
                         document.getElementById("firstname").value = this.cells[1].innerHTML;
                         document.getElementById("lastname").value = this.cells[2].innerHTML;
						
						var sex = this.cells[3].innerHTML;
						
						if(sex =='female' || sex =='Female' ){
							document.getElementById('female').checked=true;

						}else {
							document.getElementById('male').checked=true;
						}

						 

                         document.getElementById("birthday").value = this.cells[4].innerHTML;
                         document.getElementById("phone").value = this.cells[5].innerHTML;
						document.getElementById("address").value = this.cells[6].innerHTML;
                    };
                }
    
         </script>
														 
														 
		
<script>
   // Write on keyup event of keyword input element
   $(document).ready(function(){
     $("#searchvalue").keyup(function(){
     _this = this;
    
     // Show only matching TR, hide rest of them
     $.each($("#students_table tbody tr"), function() {
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


								
<script>
	function cleanTable(){
		var l=document.getElementById("students_table").rows.length;
		
		for(var i = l - 1; i > 0; i--){
    document.getElementById("students_table").deleteRow(i);
}
	}
</script>
												 
