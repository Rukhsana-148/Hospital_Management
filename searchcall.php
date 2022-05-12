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
  echo "";
}
if(isset($_POST['submit'])){
    $search = $_POST['search'];
}

$query = "SELECT `Name`, `Specialist`, `Degree`, `Place`, `Phone`, `Vedio` FROM `doctor` where `Specialist` = '$search'";

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
                      
                      <th>Phone No. for Audio Call</th>
                      <th>Video Call Link</th>
                  </tr>

              </thead>
              <tbody>
              <?php
if($result==TRUE){
$si = 1;
while($rows = mysqli_fetch_assoc($result))
{

  if($rows['Phone']!=0){

  
?>
     <tr>

     <td><?php echo "D-220".$si++; ?></td>
     <td><?php echo $rows['Name'];?></td>
     <td><?php echo $rows['Specialist']; ?></td>
     <td><?php echo $rows['Degree']; ?></td>
     <td><?php  echo "0".$rows['Phone']; ?></td>
     <td><?php echo $rows['Vedio']; ?></td>
 


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