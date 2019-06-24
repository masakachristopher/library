<?php
include('/opt/lampp/htdocs/NoticeBoardSystem/connection.php');
extract($_POST);

$output= '';
    if(isset($_GET['q']) && $_GET['q'] !== ''){
        $searchq = $_GET['q'];
        
        $q = mysqli_query($conn, "select * from user where name like '%$searchq%' or dob like '%$searchq%' or regid like '%$searchq%' or mobile like '%$searchq%' or email like '%$searchq%' or gender like '%$searchq%'");
        $c = mysqli_num_rows($q);

        if($c == 0){
            $output = 'no search results for <b>"' .$searchq. '"</b>';
        }
        else{
            while($row= mysqli_fetch_array($q)){
                $name = $row['name'];
                $dob = $row['dob'];
                $regid = $row['regid'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $gender = $row['gender'];
                $yos = $row['yos'];
                $style='<link href="../css/bootstrap.min.css" rel="stylesheet"><body>';
                $endstyle="</body>";
                $output = $style."<p>Name: ".$name. "<p></p>Date of birth:  ".$dob. "</p><p> Student's registration number: ".$regid."</p><p> Mobile contact: ".$mobile."</p><p>email address:  ".$email."</p><p> Gender: ".$gender."</p><p>Year of study(1,2,3,4,5) : ".$yos."</p>".$endstyle;
                
            }
        }
        
    }
    else{
        header("location: ./");
    }
    print("<h1> Search results </h1>");

    print($output);
    



?>