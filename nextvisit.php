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

    <h1>DOCTORS APPOINTMENT SYSTEM</h1>
       
    
</head>
<body>
  <a href="#" class="list-group-item list-group-item-action active">Add Appointment</a>
  


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="mothersreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertn.php" method="POST">
      <div class="modal-body">
      
  <div class="form-group">
  <div class="form-group">
    <label >Appointment ID: </label>
    <input type="text" name="appid" value="" placeholder="Enter Appointment Id" class="form-control">
  </div>
    <label >First Name: </label>
    <input type="text" name="mname" value="" placeholder="Enter First Name" class="form-control">
  </div>
  
  <div class="form-group">
    <label >Last Name: </label>
    <input type="text" name="cname" value="" placeholder="Enter Last Name"class="form-control">
  </div>

  <div class="form-group">
    <label >EMAIL: </label>
    <input type="text" name="phone" value="" placeholder="Enter email"class="form-control">
  </div>
  <div class="form-group">
    <label >Visit Date: </label>
    <input type="date" name="datev" value="" placeholder="Enter date" class="form-control">
  </div>

  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name ="submit"class="btn btn-primary">Set Appointment</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- delete modal -->
<div class="modal fade" id="deletemodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm You Want To delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="deletev.php" method="POST">
      <div class="modal-body">
  
    <input type="hidden" name="deleteid" id="deleteid">

  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="delete" name ="delete" class="btn btn-primary">Yes !! Delete</button>
      </div>
      </form>

    </div>
  </div>
</div>


    <div class="container">
      <div class="jumbotron">
          <div class="card">
          <H2>CREATE APPOINTMENT</H2>
          </div> 
          <div class="card">
              <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mothersreg">
           ADD DETAILS
         </button>          
        </div>
          </div>
      </div>  

    </div>
    <div class="card">
              <div class="card-body">
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

$query = "SELECT * FROM visit";
$query_run = mysqli_query($conn, $query);
?>
              <table class="table table-dark">
  <thead>
    <h3>TODAY'S APPOITMENTS</h3>
    <tr>
      <th scope="col">#</th>
      <th scope="col">APPOINTMENT ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">EMAIL </th>
      <th scope="col">APPOINTMENT DATE</th>

      <th scope="col"> <i class="fas fa-mail-bulk    "></i> EMAIL</th>
      <th scope="col"> <i class="fas fa-trash-alt"></i>DELETE</th>
    </tr>
  </thead>

  <?php
if($query_run){
foreach($query_run as $row){
      ?>

  <tbody>
  
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['appid']; ?></td>
      <td><?php echo $row['mname']; ?></td>
      <td><?php echo $row['cname']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['datev']; ?></td>
      <td>
      <a class="btn btn-primary" href="C:\wamp64\www\New\SendEmailFromLocalhost" role="button"> Send Email</a>      </td>
       <td>
        <button class="btn btn-danger delete"  name="delete" type="button"><i class="fas fa-trash-alt"></i>Delete</button>
      </td>
      
    </tr>
    
  </tbody> 

  <?php
    }
}
else{
    echo "No Record Found";
}

?>

</table>


              </div>
              <a class="btn btn-primary" href="index.php" role="button"><i class="fas fa-backward    "></i> Back Home</a>
           </div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="card"></div>
    <div class="card-body"></div>
    <script>
  $(document).ready(function () {
            $('.delete').on('click',function(){
 
              $('#deletemodal1').modal('show');

              $tr = $(this).closest('tr');

              var data =$tr.children("td").map(function(){
                return $(this).text();

              }).get();

              console.log(data);
//<!--deletes by use of id in the input boxes-->
             $('#deleteid').val(data[0]);
            });
      });
</script>
    
</body>
</html>
