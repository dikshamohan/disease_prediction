<?php
  $fullname=$_POST['fullname'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  //database connection
  $conn=new mysqlli('localhost','root','','fyp');
  if($conn->server_error){
    die('connection failed : '$conn->server_error);
  }else{
    $stmt=$conn->prepare("insert into registration(fullname,username,email,password,confirmpassword,phone,gender)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssis",$fullname,$username,$email,$password,$confirmpassword,$phone,$gender);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->
  }
  ?>
