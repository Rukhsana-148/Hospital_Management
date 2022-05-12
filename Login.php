<?php
$user = $pass = "";

if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  
}
if($user=='hospital456'&&$pass=='12345'){
  echo '<a href="doctor.php">You can registration</a>';
}


?>


<?php include 'header.html' ?>

<div class="container login">
    <div class="row">
    <h3>To Registration as Doctor , you need to know the user name & password of this management system.</h3>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form method="post" action="">
            <div class="form-group">
                 <label for="user">User Name</label>
                  <input type="text" name="user"  class="form-control" required="1" placeholder="Enter user name">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
             <input type="password" name="pass"  class="form-control" required="1" placeholder="Enter your address">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary text-white"/><input type="reset" class="btn btn-info text-white ml-5">
          </div>
           </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php include 'footer.html'?>