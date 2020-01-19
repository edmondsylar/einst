<?php
 /**
  * we are going to be using sessions in this programs ($_SESSIONS)
  */
 class Config
 {
   private $conn;

   function __construct()
   {
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'root');
     define('DB_PASSWORD', '');
     define('DB_NAME', 'raising');

     //creating a database connection here.
     $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
     if($this->conn === false){echo 'Something went wrong';}else {
       // result should be awaited here.
     }
   }

   function login($user, $password){
      $pass = md5($password);
      $q = "SELECT * FROM users where email='$user' AND password='$pass'";
      $query = mysqli_fetch_assoc(mysqli_query($this->conn, $q));

      if($query['id']){
        // start the session
        session_start();
        
        $_SESSION["loggedin"] = true;
        $_SESSION['id'] = $query['id'];
        $_SESSION['current_user'] = $query['full_name'];
        $_SESSION['email'] = $query['email'];
        $_SESSION['role'] = $query['role'];

        // Now here we redirect to the main home page
        header("Location: ../potifolio.php");
      } else{
        header("Location: ../index.php");
      }

   }

   function register_ent($name, $description, $image){

    $id = uniqid('', true);

    $sql = "INSERT INTO entrepreneurs(`id`, `name`, `description`,`image`) VALUES ('$id','$name', '$description', '$image')";
    if($insert_q = mysqli_query($this->conn, $sql)){
      return $id;
    }
  }

  function details($id, $pitching, $business, $marketing){
    $sql = "INSERT INTO entDetails(`user`, `pitching`, `businessDev`, `marketing`) VALUES ('$id', '$pitching', '$business', '$marketing')";
    if(mysqli_query($this->conn, $sql)){

      session_start();
      if($_SESSION['role'] == 'user'){
        // redirect to user panel if user role.
        return header("Location: ../home.php");

      }else if($_SESSION['role'] == 'admin'){

        // redirect to admin panel for admin role
        return header("Location: ../potifolio.php");
      }
    }
  }


   function all_ents(){
    $sql = 'SELECT * FROM entrepreneurs';
    $results = mysqli_query($this->conn, $sql);

    return $results;
  }

  function get_galla($id){

    $sql = "SELECT * FROM Gallery WHERE userId = '$id'";
    $res =  mysqli_query($this->conn, $sql);

    return $res;
  }

  function object_data($id){
    $sql = "SELECT * FROM entrepreneurs WHERE id ='$id'";
    $res =  mysqli_query($this->conn, $sql);

    return $res;

  }

  function get_details($id){
    $sql = "SELECT * FROM entDetails WHERE user='$id'";
    if($response = mysqli_query($this->conn, $sql)){

      return $response;
    }else{

      $error = "Nothig to return";
      return $error;
    }

    if(!empty($response)){

      return $response;
    }else{

    }
  }

  function add_G($userid, $description, $image){

    $insertion = "INSERT INTO Gallery(`userid`, `description`, `image`) VALUES('$userid', '$description', '$image')";
    if(mysqli_query($this->conn, $insertion)){

      return header("Location: ../gallery.php?id=".$userid);
    }else{
      header("Loaction: ../gallery.php?id=".$userid."?error='error occured during insertion'");
    }

  }

  function register($name, $email, $phone, $password){
    // $id = uniqid('', true);
    $passEncrypt = md5($password);

    $sql_register = "INSERT INTO users(`full_name`, `email`, `phoneNumber`, `password`) VALUES('$name', '$email', '$phone', '$passEncrypt')";

    if(mysqli_query($this->conn, $sql_register)){
      header("Location: ../index.php");
    }else{

      return header("Location: ../user.php?error=Account Already exists!");
    }
  }


  // end of the config file here.
 }
 ?>
