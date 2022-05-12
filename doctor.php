<?php
$name = $degree = $spe = $job = $visit = $con = $call = $video="";
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
  echo "successful";
}

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $degree = $_POST['degree'];
   $spe = $_POST['special'];
   $job = $_POST['job'];
   $visit = $_POST['visit'];
   $con = $_POST['cont'];
   $call = $_POST['phone'];
   $video = $_POST['video'];

}
echo $name;

   $sql = "INSERT INTO doctor(Name, Specialist, Degree, Place, Contact, Visit, Phone, Vedio) VALUES ('$name','$spe','$degree','$job','$con','$visit','$call','$video')";
    
   if ($conn->query($sql) === TRUE) {
      echo  "  successful ";
    
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>
<?php include 'header.html' ?>
<div class="container doctor">
  
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h4 class="text-center mt-5">Doctor's Registration</h4>
<form method="post" action="">
   <div class="form-input-group"> 
     <label for="id">Name</label>
         <input type="text" name="name" placeholder="Enter your name" required="1" class="form-control">
      </div>

      <div class="form-input-group"> 
     <label for="special">Specialist</label>
        <select class="form-control" name="special">
            <option >Cardiologist</option>
            <option>Medicine Specialist</option>
            
        </select>
      </div>
      <div class="form-input-group"> 
     <label for="degree">Degree : </label>
         <input type="text" name="degree" placeholder="Enter your degrees" required="1" class="form-control">
      </div>

      <div class="form-input-group"> 
     <label for="special">Current Job Place</label>
         <input type="text" name="job" placeholder="Enter your current job place" required="1" class="form-control">
      </div>

      <div class="form-input-group"> 
     <label for="mobile">Contact No.:</label>
         <input type="text" name="cont" placeholder="Enter your contact no" required="1" class="form-control">
      </div>

      <div class="form-input-group"> 
     <label for="mobile">Visiting Time:</label>
         <input type="text" name="visit" placeholder="Enter your visiting" required="1" class="form-control">
      </div>
      <div class="form-input-group"> 
     <label for="mobile">Phone No:</label>
         <input type="number" name="phone" placeholder="Enter your visiting" required="1" class="form-control">
      </div>
      <div class="form-input-group"> 
     <label for="mobile">Video call Link:</label>
         <input type="text" name="video" placeholder="Enter your visiting" required="1" class="form-control">
      </div>

      <div class="form-input-group mt-5"> 
         <input type="submit" name="submit" class="btn btn-info text-white mr-5"><input type="reset" class="btn btn-danger text-info">
      </div>
</form>
<a href="index.php" class="btn btn-primary text-white mt-5 p-2">Back To Homepage</a>
</div>
<div class="col-sm-2"></div>
</div>
</div>
<?php include 'footer.html' ?>