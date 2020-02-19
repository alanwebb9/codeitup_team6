<!DOCTYPE html>
<html lang="en">
<head>
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot; crossorigin=&quot;anonymous&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css&quot; crossorigin=&quot;anonymous&quot;&gt;
    &lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
</head>
<body> 
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $db="Hospital";
    //Create Connection
    try{
        $conn=mysqli_connect($servername,$username,$password,$db);
        echo"Connection Created";
        
    } catch (Exception $ex) {
        echo"Connection failed: ".$ex->getMessage();
    }
    
    return $conn;

}

function getHospitalRecord(){

    $con= getdb();
    $Sql="SELECT Speciality FROM hospitalTable ";
    $result=(mysqli_query($con, $Sql));
    
    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>Specialty</th>
                         
                        </tr></thead><tbody>";
     while($row = mysqli_fetch_assoc($result)) {
         echo "<tr><td>" . $row['Speciality']."</td>
                   </tr>";        
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
    
}
getHospitalRecord();


    ?>
</body>
</html>