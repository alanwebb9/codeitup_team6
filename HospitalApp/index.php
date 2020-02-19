
<?php
function getdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $db="Hospital";
    //Create Connection
    try{
        $conn=mysqli_connect($servername,$username,$password,$db);
        //echo"Connection Created";
        
    } catch (Exception $ex) {
        //echo"Connection failed: ".$ex->getMessage();
    }
    
    return $conn;

}
getdb();

function getSpecialty(){
    
    $con= getdb();
    $Sql="SELECT  DISTINCT(Speciality) FROM hospitalTable ";
    $result=(mysqli_query($con, $Sql));
    $specialtyArray=array();
    if (mysqli_num_rows($result) > 0) 
    { 
     while($row = mysqli_fetch_assoc($result)) 
     {
         array_push($specialtyArray,$row['Speciality']);

     }
        return $specialtyArray;
     }
     else {
     echo "you have no records";
}
}
getSpecialty();
?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <script src="js/bootstrap.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <title>
            Hospital Waiting List Application
        </title>
    </head>
    <body>
        <div class="container" >    
        <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top text-center align-items-center">
  <div class="container text-center">
      <a class="navbar-brand align-items-center" href="index.php">Hospital Waiting Lists</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
   
  </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">            Welcome to the Hospital Waiting List Application</h1>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center" >Wait List Search</h2>
    <p class="text-center">
        Please select the treatment that you require</p>
  
</section>
<div class="text-center">
 <form id="form1" name="form1"  action=" <?php echo $PHP_SELF; ?>"method="post">
    Treatment :      
    <select name="specialcountry">
        <option value="">-----------------</option>
        <?php
        $specialtyArray= getSpecialty();
        foreach($specialtyArray as $key => $value):
        echo '<option value="'.$key.'">'.$value.'</option>'; //close your tags!!
        endforeach;
        ?>
    </select>     
    <input type="submit" name="Submit" value="Select"> 
        </form>  
    
      
</div>
  <footer class="fixed-bottom navbar-light bg-light" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; BadBoyz 2020</small>
    </div>
  </footer>
  </div>
    </body>
</html>

