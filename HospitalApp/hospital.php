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
    //GRANT ALL PRIVILEGES ON *.* TO 'my_user'@'%' ;
    //Create Connection
    try{
        $conn=mysqli_connect($servername,$username,$password,$db);
        echo"Connection Created";
    } catch (Exception $ex) {
        echo"Connection failed: ".$ex->getMessage();
    }
    
    
    //Create Database 
//    $sql="Create Database myDB";
//    if(mysqli_query($conn, $sql)){
//        echo"Database Created";
//    }
//    else
//        echo 'Error Creating Database '. mysqli_error($conn);

}

function getHospitalRecord(){

    $con= getdb();
    $Sql="SELECT * FROM hospitalTable WHERE Total = 604";
    $result=(mysqli_query($con, $Sql));
}
    
    ?>