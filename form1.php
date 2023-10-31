<?php
  include 'form.php';

if(isset($_POST['submit']))  {
    $name = $_POST['name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $age = $_POST['age'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $date =$_POST['date'];
    $dname =$_POST['dname'];

        $sqlu = "SELECT * FROM pesentdata WHERE mobile='$mobile' OR email='$email' "; 
        $resultu = $conn->query($sqlu);
        if ($resultu->num_rows > 0) 
    {
        echo "<script>alert('This Email Or Phone Already Registered');</script>"; 
    }
    else
    { 
        $sql = "INSERT INTO  `pesentdata`(name,address,gender,age,mobile,email,date,dname) VALUES 
            ('$name','$address','$gender' ,'$age','$mobile','$email','$date','$dname' )";
            //IF VALUE ADD IN  DATABASE AUR NOT
            if ($conn->query($sql) === TRUE) {
                echo "form is sumbited";
        }else {
            echo "server is not connected";
        }
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostital</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>

<div class="div1">
    <form method="post">
        <H1>Enter Form Fill</H1>
        Full Name :-
        <input type="text" name="name" id="name" class="name" value="" required placeholder="Enter your Name"></br></br>
        Address :-
        <input type="text" name="address" id="address" class="address" value="" required placeholder="Enter your Address"></br></br>
        Gender:-
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="other" required >Other</br></br>
        Age:-
        <input type="number" name="age" id="age" class="age" value="" required placeholder="enter your Birth Of Date"></br></br>
        Mobile no:-
        <input type="number" name="mobile" value="" id="mobile" required></br></br>
        Email id:-
        <input type="email" name="email" id="email" class="email" value="" placeholder="Enter your Email id"></br></br>
        Appoment Date:-
        <input type="date" name="date" id="Appoment" class="Appoment" value="" placeholder=""></br></br>
        
        Dotor Name :-
        <input type="text" name="dname" id="dname" class="dname" value="" required placeholder="Enter your Name"></br></br>

        <input type="submit" name="submit"></br></br>
        
    </form>
      <!-- <a href="table.php">Data Print</a> -->
      <button><a href="table.php" target="_blank" style="text-decoration: none; color:  rgb(90, 156, 23);">List</a></button>
     
</div>
</body>
</html>
