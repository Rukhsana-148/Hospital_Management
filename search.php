<?php
$search="";
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
if(isset($_POST['submit'])){
    $search = $_POST['search'];
}
echo $search;
$query = "SELECT `Name`, `Specialist`, `Degree`, `Place`, `Contact`, `Visit` FROM `doctor` where `Specialist` = '$search'";

$result = mysqli_query($conn, $query);
?>
<?php include 'header.html'?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <h3 class="text-center text-white mt-4">Doctor List</h3>
            
          <table class="table table-bordered table-striped table-success text-primary">
              <thead>
                  <tr>
                      <th>Doctor's Id</th>
                      <th>Doctor's Name</th>
                      <th>Specialist</th>
                      <th>Degree</th>
                      <th>Current Job Location</th>
                      <th>Phone No.</th>
                      <th>Visiting Time</th>
                  </tr>

              </thead>
              <tbody>
              <?php
if($result==TRUE){
$si = 1;
while($rows = mysqli_fetch_assoc($result))
{

  if($rows['Contact']!=0){

  
?>
     <tr>

     <td><?php echo "220".$si++; ?></td>
     <td><?php echo $rows['Name'];?></td>
     <td><?php echo $rows['Specialist']; ?></td>
     <td><?php echo $rows['Degree']; ?></td>
     <td><?php  echo $rows['Place']; ?></td>
     <td><?php echo $rows['Contact']; ?></td>
     <td><?php echo $rows['Visit']; ?></td>


  </tr>

                 <?php }
}
}
else{
    echo "Error";
}
?>
              </tbody> 
         </table>
<a href="doctorList.php" class="btn btn-danger text-primary">Go Back</a>
        </div>
        </div>
</div>

<?php include 'footer.html'?>