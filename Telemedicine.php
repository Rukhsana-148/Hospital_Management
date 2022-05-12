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

$query = "SELECT `Name`, `Specialist`, `Degree`, `Phone`, `Vedio` FROM `doctor`";
$result = mysqli_query($conn, $query);

?>
<?php include 'header.html' ?>
<style>
    .color{
        font-size : 23px;
        font-weight : bold;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center text-white mt-4">Doctor List</h3>
           <form action="searchcall.php" method="post">
               <label for="search" class="text-dark color">Search Doctors by Specialist</label>
               <input type="text" name="search" placeholder="Search doctor by specialist" class="form-control mb-3 w-50"/>
               <input type="submit" value="Search" name="submit" class="btn btn-primary text-white"/>
            </form>
            <a href="index.php" class="btn btn-dark text-white">Go Homepage</a>
          <table class="table table-bordered table-striped table-success text-primary">
              <thead>
                  <tr>
                      <th>Doctor's Id</th>
                      <th>Doctor's Name</th>
                      <th>Specialist</th>
                      <th>Degree</th>
                      <th>Phone No for Audio Call.</th>
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
     <td><?php echo "01".$rows['Phone']; ?></td>
     <td><a href="#"><?php echo $rows['Vedio']; ?></a></td>


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

        </div>
        </div>
</div>
    
<?php include 'footer.html' ?>