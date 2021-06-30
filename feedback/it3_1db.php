<?php
  session_start();
  $mysqli=new mysqli('localhost','root','','feedback');
  if($mysqli->connect_error){
      die('Error:('.$mysqli->connect_errno.')'.$mysqli->connect_error);
  }
  //echo "connected successfully";
  
  $fname=$_SESSION['fname'];
  $r1=mysqli_real_escape_string($mysqli, $_POST['r1']);
  $r2=mysqli_real_escape_string($mysqli, $_POST['r2']);
  $r3=mysqli_real_escape_string($mysqli, $_POST['r3']);
  $r4=mysqli_real_escape_string($mysqli, $_POST['r4']);
  $r5=mysqli_real_escape_string($mysqli, $_POST['r5']);
  $r6=mysqli_real_escape_string($mysqli, $_POST['r6']);
  $faculty_name1="malar";
  $faculty_name2="jagadish";
  $faculty_name3="sudharson";
  $faculty_name4="deivendran";
  $faculty_name5="sanmugapriya";
  $faculty_name6="udhaya_sankar";
  $criteria="q1";
  $sql="INSERT INTO it3(fname,faculty_name,criteria,rating) VALUES ('$fname','$faculty_name2','$criteria','$r1');INSERT INTO it3(fname,faculty_name,criteria,rating) VALUES ('$fname','$faculty_name1','$criteria','$r1');INSERT INTO it3(fname,faculty_name,criteria,rating) VALUES ('$fname','$faculty_name3','$criteria','$r3');INSERT INTO it3(fname,faculty_name,criteria,rating) VALUES ('$fname','$faculty_name4','$criteria','$r4');INSERT INTO it3(fname,faculty_name,criteria,rating) VALUES ('$fname','$faculty_name5','$criteria','$r5');INSERT INTO it3(fname,faculty_name,criteria,rating) VALUES ('$fname','$faculty_name6','$criteria','$r6')";
  $insert_row=$mysqli->multi_query($sql);
  if($insert_row){
	  echo 'true';
  }
  else{
	  echo 'false';
  }
  ?>