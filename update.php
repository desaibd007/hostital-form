<?php

include 'form.php';

if(isset($_GET['iid']))  {
    $id= $_GET['iid']; 
}

if(isset($_POST['submit']))  {
   $id= $_GET['iid'];
   $name = $_POST['name'];
   $address=$_POST['address'];
   $gender=$_POST['gender'];
   $age = $_POST['age'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];
   $date =$_POST['date'];
   $dname =$_POST['dname'];
  
   

  $sql5 = 'UPDATE pesentdata SET name="'.$name.'", address="'.$address.'", email="'.$email.'", gender="'.$gender.'", mobile="'.$mobile.'", dname="'.$dname.'", date="'.$date.'"
   where `id`="'.$id.'"'; 
   $conn->query($sql5);
   if ($conn->query($sql5) === TRUE) 
   {
       echo "<script>alert('Profile Update Sucessfully')</script>";
       $msg = 'Profile Update Sucessfully';
       $msgClass = '1';
        } else {
       echo "Error updating record: " . $conn->error;
   }
}
   $id= $_GET['iid'];
   $sqlgt = "SELECT * FROM pesentdata WHERE id='$id'";
   $resultgt = mysqli_query($conn, $sqlgt);
   $firmgt = mysqli_fetch_array($resultgt);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>

<div class="div1">
    <form method="post">
        <H1>Enter Form Fill</H1>
        Full Name :-
        <input type="text" name="name" id="name" class="name" value="<?php echo $firmgt['name']; ?>" required placeholder="Enter your Name"></br></br>
        Address :-
        <input type="text" name="address" id="address" class="address" value="<?php echo $firmgt['address']; ?>" required placeholder="Enter your Address"></br></br>
        Gender:-
        <input type="radio" name="gender" value="<?php echo $firmgt['gender']; ?>" required>Female
        <input type="radio" name="gender" value="<?php echo $firmgt['gender']; ?>" required>Male
        <input type="radio" name="gender" value="<?php echo $firmgt['gender']; ?>" required >Other</br></br>
        Age:-
        <input type="number" name="age" id="age" class="age" value="<?php echo $firmgt['age']; ?>" required placeholder="enter your Birth Of Date"></br></br>
        Mobile no:-
        <input type="number" name="mobile" value="<?php echo $firmgt['mobile']; ?>" id="mobile" required></br></br>
        Email id:-
        <input type="email" name="email" id="email" class="email" value="<?php echo $firmgt['email']; ?>" placeholder="Enter your Email id"></br></br>
        Appoment Date:-
        <input type="date" name="date" id="Appoment" class="Appoment" value="<?php echo $firmgt['date']; ?>" placeholder=""></br></br>
        
        Doctor Name :-
        <input type="text" name="dname" id="dname" class="dname" value="<?php echo $firmgt['dname']; ?>" required placeholder="Enter your Name"></br></br>
        <input type="submit" name="submit"></br></br>
        
    </form>
      <!-- <a href="table.php">Data Print</a> -->
      <button><a href="table.php" target="_blank" style="text-decoration: none; color:  rgb(90, 156, 23);">Data Print</a></button>
</div>
</body>
</html>
