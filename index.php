<?php include "header.html" ?>

<div class="container">
    <div class="top">
        
    </div>
    <div class="nav-part">
    <div class="row">
        <div class="col-sm-4">
         <div class="card bg-secondary">
             <div class="card-header text-white">DOCTOR'S SITE</div>
             <div class="card-body">
                   <nav>
              <ul>
                  <a href="Login.php"><li class="bg-primary text-white p-2">Doctor's Registration Form</li></a>
                 <a href="doctorList.php"> <li class="bg-primary text-white p-2">Doctor's List</li></a>
                 <a href="Telemedicine.php"><li class="bg-primary text-white p-2">Telemedicin</li></a>
                  <a href="test.html"><li class="bg-primary text-white p-2">Medical Test</li></a>
              </ul>
          </nav>
             </div>
         </div>
        
        </div>
       
        <div class="col-sm-4">
           <div class="card bg-info">
               <div class="card-header text-warning">HOIPITAL DESCRIPTION</div>
               <div class="card-body">
                    <nav>
                <ul>
                    <li class="bg-secondary text-warning p-2"><a href="about.html">About Hospital</a></li>
                    <li  class="bg-secondary text-warning p-2">Galary of Hospital</li>
                </ul>
            </nav>
               </div>
           </div>
           
        </div>
       
         <div class="col-sm-4">
            <div class="card bg-danger">
                <div class="card-header text-warning">PATIENT'S SITE</div>
                <div class="card-body">
                      <nav>
                 <ul>
                    
                     <a href="patients.php" ><li class="bg-success text-white p-2">Patient's Registration</li></a>
                    <a href="patientList.php"> <li class="bg-success text-white p-2">Patient's List</li></a>
                     <a href="payment-form.php"><li class="bg-success text-white p-2">Payment Form</li></a>
                   <a href="paymentList.php"> <li class="bg-success text-white p-2">Payment List</li></a>
                 </ul>
             </nav>
                </div>
            </div>
           
         </div>
    </div>
    </div>
</div>


<?php include "footer.html"?>