<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

// year of study(yos)


//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','$yos','$imageName','$dob','$regid')";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}

?>

 
  <h3 style="color:silver">REGISTER HERE</h3>
		<form method="post" enctype="multipart/form-data">
		
			<p><?php echo @$err;?></p>
						
					<div class="row">	
					<div class="col-sm-4">Enter your name:</div>  
					<div class="col-sm-5">
					<input type="text" placeholder="your name" class="form-control" name="n" required></div>
					
					</div>

					<br>

					<div class="row">
					<div class="col-sm-4">Enter your email: </div>
					<div class="col-sm-5">
					<input type="email" placeholder="your email" class="form-control" name="e" required></div>
					</div>

					<br>

					<div class="row">
					<div class="col-sm-4">Enter your password: </div>
					<div class="col-sm-5">
					<input type="password" placeholder="your password" class="form-control" name="p" required></div>
					</div>

					<br>

					<div class="row">
					<div class="col-sm-4">Enter your mobile: </div>
					<div class="col-sm-5">
					
					<input  class="form-control" type="tel" placeholder="+255" name="mob" required></div>
					</div>
				
					<br>

					<div class="row">
					<div class="col-sm-4">Select your gender:</div>
					<div class="col-sm-2">
					
					<input  type="radio" name="gen" value="m" required>Male</div>
					<div class="col-sm-2">
					
					<input type="radio" name="gen" value="f">Female	</div>
					</div>
					

					<br>

					<div class="row">
					<div class="col-sm-4">Year of study: </div>
					<div class="col-sm-2">
					
					<select type="number" class="form-control" name="yos" required>
					<option value="">your year of study</option>	
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					</select></div>
					</div>
					<br>
	
					<div class="row">
					<div class="col-sm-4">Registration number:</div>
					<div class="col-sm-2">
					
					<input type="" name="regid" class="form-control" placeholder="0000-00-00000" required>
					<br>
					</div>
					</div>

					<div class="row">
					<div class="col-sm-4">Upload  your Image:</div>
					<div class="col-sm-4">		
					<!-- Upload  your Image: -->
					<input class="form-control" type="file" name="img" required>
					<br>
					</div>
					</div>

					<div class="row">
					<div class="col-sm-4">Enter your Date of Birth:</div>
					<div class="col-sm-1">
					
					
					<select class="form-control" name="dd" required>
					<option value="">Day</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select></div>
					<div class="col-sm-2">
					<select class="form-control" name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select></div>
					
 					<div class="col-sm-1">
					<select class="form-control" name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=2019;$i>=1950;$i--)
					{
					echo "<option>".$i."</option>";
					}
					?>    					
					</select></div></div>
					
				
					<br></div>
					</div>
					
                   <input type="submit" class="btn btn-success" value="Save" name="save"/>
                   <input type="reset" class="btn btn-danger" value="Reset"/>
		
</form>