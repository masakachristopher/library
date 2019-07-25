<body style="background:silver">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    
<?php
include('/opt/lampp/htdocs/NoticeBoardSystem/connection.php');
extract($_POST);



$output= '';
    if(isset($_GET['u']) && $_GET['u'] !== ''){
        $searchu = $_GET['u'];
        
        $u = mysqli_query($conn, "select * from notice where subject like '%$searchu%' or Description like '%$searchu%' or image_post like '%$searchu%' or Date like '%$searchu%' ");
        $c = mysqli_num_rows($u);

        if($c == 0){
            $output = 'no search results for <b>"' .$searchu. '"</b>';
        }
        else{
            
            while($row= mysqli_fetch_array($u)){
              
                $style='<link href="../css/bootstrap.css" rel="stylesheet"><body>';
                $endstyle="</body>";
                $output = '<h2> The subject: '.$row['subject'].'</h2><img class="Responsive" style="border-radius:5px" src="../admin/images/poster/'.$row['image_post'].'" width="50%" height="50%" alt="image not found"><h3>'.$row['Description'].'</h3>'.$row['Date'];
                
            }
        }
        
    }
    else{
        header("location: ./");
    }
    print("<h1> Your search results !! </h1>");
    // print($style.$endstyle);
    print($output);
    



?>
</div>
</body>