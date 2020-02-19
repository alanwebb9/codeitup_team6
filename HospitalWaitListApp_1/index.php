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
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
      <a class="navbar-brand" href="index.php">Waiting List Search</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">            Welcome to the Hospital Waiting List</h1>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h2 class="font-weight-light">Page Content</h2>
    <p class="text-center">
        Please select the treatment that you require</p>
  </div>
</section>

      
        <?php
            echo "<form";
            echo "<select>";
            foreach($treatments as $treatment)
            {
                echo "<option value = $treatment >$treatment</option>";
            }
            echo "</select>";
            echo "</form>";
        ?>
    </body>
</html>

