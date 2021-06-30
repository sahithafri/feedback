<?php
  session_start();
  $mysqli=new mysqli('localhost','root','','feedback');
  if($mysqli->connect_error){
      die('Error:('.$mysqli->connect_errno.')'.$mysqli->connect_error);
  }
  //echo "connected successfully";
  $fname=mysqli_real_escape_string($mysqli, $_POST['fname']);
  $lname=mysqli_real_escape_string($mysqli, $_POST['lname']);
  $email=mysqli_real_escape_string($mysqli, $_POST['email']);
  $password=mysqli_real_escape_string($mysqli, $_POST['password']);
  $passwordConfirm=mysqli_real_escape_string($mysqli, $_POST['passwordConfirm']);
  if(strlen($fname)<2){
      echo 'fname';
  }else if(strlen($lname)<2){
      echo 'lname';
  }else if(strlen($email)<=4){
      echo 'eshort';
  }else if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
      echo 'eformat';
  }else if(strlen($password)<=4){
	  echo 'pshort';  
  }else if(strcmp($password,$passwordConfirm) !==0){
      echo 'password';
  }else{
      $spassword=password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));
  $query="SELECT * from members WHERE email='$email'";
  $result=mysqli_query($mysqli,$query) or die(mysqli_error());
  $num_row= mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  if($num_row<1)
  {
      $insert_row=$mysqli->query("INSERT INTO members(fname,lname,email,password) VALUES ('$fname','$lname','$email','$spassword')");
      if($insert_row){
          $_SESSION['login']=$mysqli->insert_id;
          $_SESSION['fname']=$fname;
          $_SESSION['lname']=$lname;
          echo 'true';
      }
  }else{
          echo 'false';
       }
  }
?>