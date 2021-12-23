<!-- Teacher's Website -->
<?php
 
  include('server.php');
  
  // Prevent access to the teacher.php if user not logged in
  if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: index.php");
    die();
  }

?>

<!DOCTYPE html>
<html lang="el">
<head>
  <title>Teacher's Website</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body style="background: fixed;  background-position: center; background-size: cover;  background-repeat: no-repeat; background-image: url('images/home.jpg');">

  <!-- Navigation Bar  -->
  <div class="container">
    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: rgb(100, 113, 105)" >
    
      <a class="py-2" href="Teacher.php">
        <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/30/000000/external-book-library-wanicon-lineal-wanicon-1.png"/>
      </a>
      
      <!-- dropdown toggler when screen size is too small -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- /dropdown toggler when screen size is too small -->

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto navbar-spacing mr-3" >
          <li class="nav-item active pr-2" >
            <a class="nav-link text-light" href="App_Functions/AddStudent/AddStudent.php"><i class="fas fa-plus"></i> Add Student</a>
          </li>

          <li class="nav-item active pl-2" >
            <a class="nav-link text-light" href="App_Functions/EditStudent/EditStudent.php"><i class="fas fa-edit"></i> Edit Student</a>
          </li>

          <li class="nav-item active pl-2" >
            <a class="nav-link text-light" href="App_Functions/DeleteStudent/DeleteStudent.php"><i class="fas fa-user-times"></i> Delete Student</a>
          </li>

          <li class="nav-item active pl-2" >
            <a class="nav-link text-light" href="App_Functions/SearchStudent/SearchStudent.php"><i class="fas fa-search"></i> Search Student</a>
          </li>
        </ul>
      

        <div class="navbar-nav ml-0 pr-2 pl-2 rounded" style="background-color: white;">
          <div class="nav-item dropdown">
            <a data-toggle="dropdown" class="nav-link dropdown-toggle user-action "><i class="fa fa-user" aria-hidden="true"></i>
              <?php echo $_SESSION['name'] ?> 
            </a> 
            <div class="dropdown-menu">
              <a class="nav-link dropdown-item p-1" href="index.php?logout='1'">
                <i class="fa fa-power-off" aria-hidden="true"></i> Log out
              </a> 
            </div>
          </div>
        </div>

      </div>                   
    </nav>
  </div>
  <!-- /Navigation Bar -->

  <br>
  
  <!-- Header section -->
  <div>
    <div class="position-relative overflow-hidden p-5 text-center m-0">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 font-weight-normal">Welcome </h1>
          <p class="lead font-weight-normal">You can Add, Edit, Delete and Search Students</p>
          <a class="btn btn-outline-secondary" href="App_Functions/AddStudent/AddStudent.php ">Start Here</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
  </div>
  <!-- /Header section  -->

  <!-- footer -->
  <footer class="bg-light p-1 text-center text-dark border-top fixed-bottom">
    <p>
      &copy; Copyrights <strong>Aratos Test</strong>. All Rights Reserved
    </p>
  </footer>
  <!-- /footer -->  

</body>
</html>