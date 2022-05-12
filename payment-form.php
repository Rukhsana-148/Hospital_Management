<?php
$name = $id = $mobile = $phone = $taka ="";
$serverName = "localhost";  
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $phone = $_POST['phone'];
    $taka = $_POST['taka'];
  }
  $sql = "INSERT INTO `payment`(`Id`, `Name`, `Mobile`, `Phone`, `Taka`) VALUES ('$id','$name','$mobile','$phone','$taka')";
  if ($conn->query($sql) === TRUE) {
    echo  "successful";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
<?php include 'header.html' ?>
<div class="container pay p-5">
    <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8">
              <h4>Payment Form</h4>
              <form method="post" action="">
              <div class="form-input-group">
                      <label for="id">Patient's Id:</label>
                      <input type="text" name="id" placeholder="Enter your id" required="1" class="form-control">
                  </div>
                  <div class="form-input-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" placeholder="Enter your name" required="1" class="form-control">
                  </div>
                   <div class="form-input-group">
                      <label for="mobile">Phone Number</label>
                      <input type="number" name="mobile" placeholder="Enter your phone number" required="1" class="form-control">
                  </div>
                  <div class="form-input-group">
                      <label for="phone">Other Phone Number</label>
                      <input type="number" name="phone" placeholder="Enter your phone number" required="1" class="form-control">
                  </div>
                   <div class="form-input-group">
                      <label for="taka">Amount</label>
                      <input type="text" name="taka" placeholder="Enter your amount" required="1" class="form-control">
                  </div>
                  
                     <div class="form-input-group">
                      <input type="submit" name="submit" class="btn btn-secondary text-warning m-4"><input type="reset" class="btn btn-success text-danger" value="Clear">
                  </div>
                  
              </form>
          </div>
          <div class="col-sm-2"></div>
    </div>
   
  <a href="index.php" ><div class="btn btn-primary text-white p-4">Go Back</div></a>
   
</div>
<?php include 'footer.html' ?>