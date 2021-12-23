<!-- server.php = interact with the server/db -->
<?php
  include_once('../database/connection_to_db.php');

  session_start(); 

  // initializing variables
  $username = "";
  $password = "";
  $errors = array(); 

  /* ------------------------------- USER LOGIN -------------------------------------- */
  if (isset($_POST['login_btn'])) {

    $username = mysqli_real_escape_string($connection_db, $_POST['username']);
    $password = mysqli_real_escape_string($connection_db, $_POST['password']);
  
    // check if username and password fiels is not empty
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

        // select teacher's table if db's username and password match with login's forms data
        $query = "SELECT * FROM teachers WHERE username= '$username' AND password= '$password' LIMIT 1";
        $results = mysqli_query($connection_db, $query); 
        
        // if login data match then redirect to teacher's website
        if (mysqli_num_rows($results) == 1) {

              $row = mysqli_fetch_array($results);
        
              // store name and surname to session variable 
              $userInfo = $row['name'];
              $userInfo .= $row['surname'];
              $_SESSION['name'] = $userInfo;  

              // Session to prevent access to the website without authority
              $_SESSION['userLogin'] = "Loggedin";

              // redirect to teacher's website
              header('location: Teacher.php');		
          }else {
            array_push($errors, "Your username does not exist");
          }
    }
  }
  /* ------------------------------- /USER LOGIN -------------------------------------- */

  mysqli_close($connection_db);
?>