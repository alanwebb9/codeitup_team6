<?php include("classFolder/Hospital.php");?>
<?php include("classFolder/Treatment.php");?>
<?php include("classFolder/County.php");?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <script src="js/bootstrap.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <title>
            Hospital Waiting List Application
        </title>
    </head>
    <body>
        
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
  </div>
</section>
<div class="text-center"
 <form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">  
            Treatment :  
            <select Treatment Name='NEW'>  
            <option value="">--- Select ---</option>  
            <?  
                mysql_connect ("localhost","root","");  
                mysql_select_db ("Hospital");  
                $select="Hospital";  
                if (isset ($select)&&$select!=""){  
                $select=$_POST ['NEW'];  
            }  
            ?>  
            <?  
                $list=mysql_query("select * from Speciality order by Speciality_Name asc");  
            while($row_list=mysql_fetch_assoc($list)){  
                ?>  
                    <option value="<? echo $row_list['Speciality_Name']; ?>"<? if($row_list['Speciality_Name']==$select){ echo "selected"; } ?>>  
                                         <?echo $row_list['Speciality_Name'];?>  
                    </option>  
                <?  
                }  
                ?>  
            </select>  
            <input type="submit" name="Submit" value="Select" />  
        </form>  
    
        <?php
            $treatments = array();
            $agegroups = array();
            $counties = array();
            echo '<form';
            echo '<select>';
            foreach($treatments as $treatment)
            {
                echo '<option value = $treatment >$treatment</option>';
            }
            echo '</select>';
            echo '<select>';
            foreach($agegroups as $agegroup)
            {
                echo '<option value = $agegroup >$agegroup</option>';
            }
            echo '</select>';
            echo '<select>';
            foreach($counties as $county)
            {
                echo '<option value = $county >$county</option>';
            }
            echo '</select>';
            echo '<input type="submit" type="button" value="Submit" name="searchForHospital">';
            echo '</form>';
            if (isset($_POST['searchForHospital']))
            {
                echo '<table border="1"';
                echo "<tr><th>Hospital</th><th>Average wait time</th></tr>";
                foreach($hospital as $hospitals)
                {
                    foreach($waitTime as $waitTimes)
                    {
                        echo "<tr><td>$hospitals</td><td>$waitTimes</td></tr>";
                    }
                }
            echo '<table>';
            }
            else //the form has not been submitted
            {
                echo "Please enter the treatment required";
            }
        ?>
    </div>

  <footer class="fixed-bottom navbar-light bg-light" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; BadBoyz 2020</small>
    </div>
  </footer>
    </body>
</html>

