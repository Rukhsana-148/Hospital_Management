<?php
$name = $age = $dis = $place = $phone = $date="";
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
  echo "successful connected";
}

$query = "SELECT `Id`, `Name`, `Mobile`, `Phone`, `Taka` FROM `payment'";
$result = mysqli_query($conn, $query);

?>
<?php include 'header.html' ?>
<div class="contain">
    <div class="row">
        <div class="col-sm-12">
        <table class="table table-bordered table-striped table-dark text-white">
              <thead>
             
                      <thead>
                      <tr>
                          <th>Patient's Id</th>
                          <th>Patient's Name</th>
                          <th>Patient's Phone Number</th>
                          <th>Other Phone Number</th>
                          <th>Money</th>
</tr>
                          <thead>
                              <tbody>
                              <?php
if($result==TRUE){
while($rows = mysqli_fetch_assoc($result))
{
  if($rows['Mobile']!=0){
  
?>
        <tr>
            <td><?php echo $rows['Id'];?></td>
            <td><?php echo $rows['Name'];?></td>
            <td><?php echo $rows['Mobile'];?></td>
            <td><?php echo $rows['Phone'];?></td>
            <td><?php echo $rows['Taka'];?></td>
  </tr>
            
<?php }
}
}
else{
    echo "error";
}
?>


</tbody>

  </table>
</div>
</div>
</div>
<?php include 'footer.html' ?>