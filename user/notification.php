<?php 

$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}

else
{
?>
<body>

<div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="category">
								<h4><span>Quick Links</span></h4>
                                    <ul>
                                        <a href="https://ptms.coict.udsm.ac.tz/user/auth/login">PTMS for COICT</a><span style="margin-left:10px"></span>
                                        <a href="https://aris2.udsm.ac.tz/">Aris</a><span style="margin-left:10px"></span>
                                        <a href="https://timetable.udsm.ac.tz/">Timetable</a><span style="margin-left:10px"></span>
                                        <a href="https://lms.udsm.ac.tz/login/index.php">UDSM Learning Management System</a><span style="margin-left:10px"></span>
                                        <a href="https://www.udsm.ac.tz/web/index.php/institutes/library">Library</a><span style="margin-left:10px"></span>
                                        
                                    </ul>
                                </div>
							</div>
							
<h1> NOTIFICATIONS</h1>


		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{


echo '<h1>'.$i.'.'.$row['subject'].'</h1><img class="Responsive" style="border-radius:5px" src="../admin/images/poster/'.$row['image_post'].'" width="50%" height="50%" alt=""><h3>'.$row['Description'].'</h3>'.$row['Date'];

$i++;
}
		?>
		

<?php }?>


</body>