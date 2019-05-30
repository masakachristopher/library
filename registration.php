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

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>
<center>
<h2>Register Here</h2>
		<form width="50px" method="post" enctype="multipart/form-data">
		
	
		<?php echo @$err;?>
	
				
				
					 Enter your name: <br>
					<input type="text"  class="form-control" name="n" required>
					<br>
				
					 Enter your email: <br>
					<input type="email"  class="form-control" name="e" required>
			
					<br>
			
					Enter your password: <br>
					<input type="password" class="form-control" name="p" required>
				
					<br>
					Enter your mobile: <br>
					<input  class="form-control" type="number" value="+255" name="mob" required>
				
				
					<br>
					Select your gender:
					Male<input type="radio" name="gen" value="m" required>
					Female<input type="radio" name="gen" value="f">	
					<br>
				
					<br>
								
					Upload  your Image:
					<input class="" type="file" name="img" required>
					<br>
					<br>
					Enter your Date of Birth:
					
					<select name="dd" required>
					<option value="">Day</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=2019;$i>=1950;$i--)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<br>
					<br>

<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					
			<center>
		</form>
	</body>
</html>