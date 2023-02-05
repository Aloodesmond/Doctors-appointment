<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>      

    
    <!DOCTYPE html>

    <h1>DOCTORS APPOINTMENT REGISTRATION SYSTEM</h1>
       
    
</head>
<body>
  <a href="#" class="list-group-item list-group-item-action active"> <i class="fas fa-address-book    "></i> Add New Patients</a>
  


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="mothersreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-address-book    "></i>Add details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insert.php" method="POST">
      <div class="modal-body">
      
  <div class="form-group">
    <label >Names: </label>
    <input type="text" name="name" value="" placeholder="Enter Name" class="form-control">
  </div>
  <div class="form-group">
    <label >Patients ID: </label>
    <input type="text" name="patientsid" value="" placeholder="Enter patients Id" class="form-control">
  </div>
  <div class="form-group">
    <label >Age: </label>
    <input type="text" name="age" value="" placeholder="Enter age"class="form-control">
  </div>
  <div class="form-group">
    <label >Phone Number: </label>
    <input type="text" name="phone" value="" placeholder="Enter Phone number"class="form-control">
  </div>
  <div class="form-group">
    <label >Marital Status</label>
    <select class="form-control" id="exampleFormControlSelect1" name="status" class="form-control">
      <option>Married</option>
      <option>Single</option>
      <option>Separated</option>
    </select>
  </div>
  <div class="form-group">
    <label >Next of Kin Contact: </label>
    <input type="text" name="keen" value="" placeholder="Enter next of keen contact"class="form-control">
  </div>
  <div class="form-group">
    <label >Date: </label>
    <input type="date" name="date" value="" placeholder="Enter date" class="form-control">
  </div>

  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fas fa-closed-captioning    "></i> Close </button>
        <button type="submit" name ="submit"class="btn btn-primary"> <i class="fas fa-save    "></i> Save Details </button>
      </div>
      </form>
    </div>
  </div>
</div>



    <div class="container">
      <div class="jumbotron">
          <div class="card">
          <H2>REGISTER PATIENT</H2>
          </div> 
          <div class="card">
              <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mothersreg">
           ADD DETAILS <i class="fas fa-address-book    "></i>
         </button>          
        </div>
          </div>
      </div>  
      <a class="btn btn-primary" href="index.php" role="button"> <i class="fas fa-backward    "></i> Back Home</a>

    </div>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="card"></div>
    <div class="card-body"></div>
</body>
</html>
