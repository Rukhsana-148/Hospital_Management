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
$query = "SELECT `Name`, `Age`, `Diseases`, `Place`, `Phone`, `Date` FROM `patient`";
$result = mysqli_query($conn, $query)
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
            <h3 class="text-center text-white mt-4">Patient List</h3>
            <h5>Search Patient by : <span id="id" class="btn btn-dark text-white">Patient Name</span> <span id="date" class="btn btn-dark text-white">Date</span></h5>
           <form action="searchD.php" id="dateS" method="post">
               <label for="date" class="text-dark color">Search Patients by Date</label>
               <input type="date" name="date" placeholder="Search patient by Date"/>
               <input type="submit" name="submit" value="Search" class="btn btn-dark text-white"/>
          </form>
          <form action="searchP.php" id="IdS" method="post">
               <label for="name" class="text-dark color">Search Patients by Name</label>
               <input type="text" name="name" placeholder="Search patient by name" class="form-control w-50"/>
               <input type="submit" name="submit" value="Search" class="btn btn-dark text-white"/>
          </form>
          <br>
          <table class="table table-bordered table-striped table-dark text-white">
              <thead>
                  <tr>
                      <th>Patient Id</th>
                      <th>Patient Name</th>
                      <th>Age</th>
                      <th>Diseases</th>
                      <th>Address</th>
                      <th>Phone No.</th>
                      <th>Room No
                      <th>Date</th>
                      <th>Present Status</th>
                  </tr>
              </thead>
              <tbody>
              <?php
if($result==TRUE){
  
$si = 1;
for($i=2;$i<=6;$i++){
    $j = 0;
    do{
while($rows = mysqli_fetch_assoc($result))
{
          

  if($rows['Age']!=0){

  
?>
                  <tr>
                      <td><?php echo date("Y").$si++ ;?></td>
                      <td><?php echo $rows['Name']; ?></td>
                      <td><?php echo $rows['Age']; ?></td>
                      <td><?php echo $rows['Diseases']; ?></td>
                      <td><?php echo $rows['Place']; ?></td>
                      <td><?php echo "0".$rows['Phone']; ?></td>
                      <td><?php 
                              $j++;
                              if($j<10){
                             echo $i."0".$j;
                              }
                              else 
                              echo $i.$j;
                               ;
                       ?></td>
                      <td><?php echo $rows['Date']; ?></td>
                    <td><a href="#" id="status" class="btn btn-primary text-white">Remain</a> <a href="#" id="leave" class="btn btn-success text-white">Leave</a> </td>
                  </tr>
                  <?php }
}

   }while($j>20);
}
}
else{
    echo "Error";
}
?>
             </tbody>
         </table>
         <input type="submit" name="save" value="Save Data" formaction="save.php" class="btn btn-info text-white"/>
       </div>
        </div>
</div>
<script>
    $('#IdS').hide();
    $('#dateS').hide();
    $('#id').click(function(){
        $('#IdS').show();
    $('#dateS').hide();
    });
    $('#date').click(function(){
        $('#IdS').hide();
    $('#dateS').show();
    })

   $('#leave').hide();
   $('#status').click(function(){
       $('#status').hide();
       $('#leave').show();
   })
  
    
</script>
<?php include  'footer.html' ?>