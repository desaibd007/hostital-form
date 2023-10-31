<?php
  include 'form.php';

$query = "SELECT * from pesentdata ";
$firms = $conn->query($query);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data of Appoinment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Appoiment of Pesent</h2>
  <p>Detila of pesent name, address, Mobile.no, email, age ,gender, Doctor name list of Table </p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Sr.No</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Mobile No</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Doctor Name</th>
        <th ></th>
      </tr>
    </thead>
    <tbody>
    
      <?php $i=1; while ($firm = $firms->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $i;  ?></td>
        <td><?php  echo $firm['name'] ?></td>
        <td><?php  echo $firm['address'] ?></td>
        <td><?php  echo $firm['mobile'] ?></td>
        <td><?php  echo $firm['email'] ?></td>
        <td><?php  echo $firm['age'] ?></td>
        <td><?php  echo $firm['gender'] ?></td>
        <td><?php  echo $firm['dname'] ?></td>
        <!-- <td><button><a href="table.php?id=<?php echo $firm['id'] ?>">click</button></a></td> -->
        <td><button><a href="delete.php?id=<?php echo $firm['id'] ?>" target="_blank" style="text-decoration:none; color: rgb(250, 7, 7);">Delete</button></a>
        <button><a href="update.php?iid=<?php echo $firm['id']; ?>" target="_blank" style="text-decoration: none; color:  rgb(90, 156, 23);">updated</button></a></td>
      </tr>
     <?php $i++; } ?>
    </tbody>
  </table>
  </div>   
</body>
</html>