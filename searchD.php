<?php
$date="";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "";
}
if(isset($_POST['submit'])){
    $date = $_POST['date'];
}

$query = "SELECT `Name`, `Age`, `Diseases`, `Place`, `Phone`, `Date` FROM `patient` WHERE `Date` = '$date'";

$result = mysqli_query($conn, $query);
?>
<?php include 'header.html'?>
<div class="container">
<div class="row">
        <div class="col-sm-12">
        <table class="table table-bordered table-striped table-info text-danger">
              <thead>
                  <tr>
                      
                      <th>Patient Name</th>
                      <th>Age</th>
                      <th>Diseases</th>
                      <th>Address</th>
                      <th>Phone No.</th>
                      <th>Date</th>
                     
                  </tr>
              </thead>
              <tbody>
 <?php
if($result==TRUE){

  echo "<h5>Details of Patients who admitted at ".$date."</h5>";
while($rows = mysqli_fetch_assoc($result))
{
  if($rows['Age']!=0){
?>
                  <tr>
                      
                      <td><?php echo $rows['Name']; ?></td>
                      <td><?php echo $rows['Age']; ?></td>
                      <td><?php echo $rows['Diseases']; ?></td>
                      <td><?php echo $rows['Place']; ?></td>
                      <td><?php echo "0".$rows['Phone']; ?></td>
                      <td><?php echo $rows['Date']; ?></td>
                  </tr>
                  <?php 
}

  
}
}
else{
    echo "Error";
}
?>


</div>
</div>
</div>
<?php include 'footer.html'?>