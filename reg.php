<?php

    echo "<p>Welcome <b>".$_POST["First_Name"]."</b>!</p>";
    echo "<p>Your Last Name is:<br/><b>".$_POST["Last_Name"]."</b></p>";
    echo "<p>Your email is:<br/><b>".$_POST["email"]."</b></p>";
    echo "<p>Your phone is:<br/><b>".$_POST["phone"]."</b></p>";
    echo "<p>Your Last Name is:<br/><b>".$_POST["Last_Name"]."</b></p>";
    echo "<p>Your address is:<br/><b>".$_POST["address"]."</b></p>";
    
 
    if(isset($_POST['gender'])){
        echo "<p>Your Gender: ".$_POST['gender'].'</p>';
    }
     


     if(isset($_POST['city'])){
        echo "<p>Your city: ".$_POST['city'].'</p>';
         }
        else
        	echo"Please select your city";
    
    
   /* checkbox */
 if(!empty($_POST["skills"])){
            echo "Your Skills <ul>";
            foreach($_POST["skills"] as $skill){
                echo "<li>$skill</li>";
            }
            echo "</ul>";
        }
        else

            echo "<br>There is no skills";

     if($_FILES['img_file']['size']>0){
        //print_r($_FILES);die();  
        echo 'File Name: '.$_FILES['img_file']['name'].'<br>';
        echo 'File Type: '.$_FILES['img_file']['type'].'<br>';
        echo 'File Size: '.$_FILES['img_file']['size'].'<br>';
        echo 'File Temp Name: '.$_FILES['img_file']['tmp_name'].'<br>';

       
    }
    else
        echo "Please select valid Image".'<br>';

    if($_FILES['cv_file']['size']>0){
        //print_r($_FILES);die();  
        echo 'File Name: '.$_FILES['cv_file']['name'].'<br>';
        echo 'File Type: '.$_FILES['cv_file']['type'].'<br>';
        echo 'File Size: '.$_FILES['cv_file']['size'].'<br>';
        echo 'File Temp Name: '.$_FILES['cv_file']['tmp_name'].'<br>';

       
    }
    else
        echo "Please select CV";



?>