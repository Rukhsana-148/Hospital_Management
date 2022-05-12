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
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $dis = $_POST['dis'];
  $phone = $_POST['number'];
  $place = $_POST['add'];
  $date = $_POST['date'];
}
$sql = "INSERT INTO patient(Name, Age, Diseases, Place, Phone, Date) VALUES ('$name','$age','$dis','$place','$phone','$date')";
if ($conn->query($sql) === TRUE) {
  echo  "successful";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<?php include 'header.html'?>
<div class="container form">
    <div class="row">
        <div class="col-sm-2"></div>
             <div class="col-sm-8">
                 <h4>Patients Form</h4>
                 <form method="post" action="">
                     <div class="form-group">
                        <label for="name">Name : </label>
                         <input type="text" name="name"  class="form-control" required="1" placeholder="Enter your name">
                     </div>
                     <div class="form-group">
                         <label for="age">Age : </label>
                         <input type="text" name="age"  class="form-control" required="1" placeholder="Enter your age">
                     </div>
                       <div class="form-group">
                        <label for="dis">Disease</label>
                         <select class="form-control" name="dis">
                             <option>Anthrax</option>
                             <option>Botulism</option>
                             <option>Brucellosis</option>
                             <option>Chikungunya Virus </option>
                             <option>Cholera</option>
                             <option>Coronavirus Diseases</option>
                             <option>Dengue</option>
                             <option>Ebola virus diseases</option>
                             <option>Haemorrhagic fevers, viral</option>
                             <option>Hepatities</option>
                             <option>HIV/AIDS</option>
                             <option>Influenza</option>
                             <option>Rotavirus</option>
                             <option>syndrome</option>
                             <option>Sexually transmitted infections</option>
                             <option>Tuberculosis</option>
                             <option>Zika Virus</option>
                         </select>
                     </div>
                       <div class="form-group">
                        <label for="add">Address</label>
                         <input type="text" name="add"  class="form-control" required="1" placeholder="Enter your address">
                     </div>
                       <div class="form-group">
                        <label for="number">Phone Number</label>
                         <input type="number" name="number" class="form-control" required="1" placeholder="Enter your phone number">
                     </div>
                       <div class="form-group">
                       <label for="date">Date</label>
                         <input type="date" id="e" name="date" class="form-control" required="1" placeholder="Enter your phone number">
                       </div>
                       <div class="form-group">
                         <input type="submit" name="submit" class="btn btn-success text-white" value="Submit">  <input type="reset" class="btn btn-success text-danger" value="Clear">
                     </div>
                 </form>
             </div>
           <div class="col-sm-2"></div>
            <a href="index.php" ><div class="btn btn-primary text-white p-4">Go Back</div></a>
          
            
    </div>
</div>
<script type="text/javascript">
    document.getElementById('e').value = new Date().toISOString().substring(0, 10);
</script>
<?php include 'footer.html'?>