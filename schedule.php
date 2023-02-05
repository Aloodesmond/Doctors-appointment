
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>      

    

    <!--edit function form -->
<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-edit    "></i> Edit child details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="update.php" method="POST">
      <div class="modal-body">
  <div class="form-group">
    <input type="hidden" name="updateid" id="updateid">
    <label >Name: </label>
    <input type="text" name="name" id="name" value="" placeholder="Enter Name" class="form-control">
  </div>
  <div class="form-group">
    <label >Patients ID: </label>
    <input type="text" name="patientsid" value="" placeholder="Enter patients Id" class="form-control">
  </div>
  <div class="form-group">
    <label >Age: </label>
    <input type="text" name="age"  id="age" value="" placeholder="Enter age in weeks" class="form-control">
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

    <label > Date:  </label>
    <input type="date" name="date1" id="date1" value="" placeholder="Enter date" class="form-control">
  </div>
  
    
    
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close  </button>
        <button type="submit" name ="update"class="btn btn-primary" >update Details <i class="fas fa-edit    "></i> </button>
      </div>
      </form>

    </div>
  </div>
</div>
    <!-- delete modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm You Want To delete <i class="fas fa-exclamation    "></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="deletec.php" method="POST">
      <div class="modal-body">
  
    <input type="hidden" name="deleteid" id="deleteid">

  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">  No  </button>
        <button type="delete" name ="delete" class="btn btn-primary"> <i class="fas fa-trash-alt   "></i>Yes !! Delete  </button>
      </div>
      </form>

    </div>
  </div>
</div>
<!--END OF POPUP EDIT-->

<!-- delete End-->
<!-- inserting into table -->
    <div class="card">
              <div class="card-body">
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

$query = "SELECT * FROM mother";
$query_run = mysqli_query($conn, $query);
?>
              <table id="tableid" class="table table-dark">
  <thead>
    <h3>TODAY'S PATIENTS</h3>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Names</th>
      <th scope="col">ID</th>
      <th scope="col">Age</th>
      <th scope="col">phone</th>
      <th scope="col">Marital status</th>
      <th scope="col">Next of Keen</th>
      <th scope="col">Visiting Date</th>
      <th scope="col"> <i class="fas fa-edit    "></i> Edit </th>
      <th scope="col"><i class="fas fa-trash-alt"  ></i>Delete</th>
      <th scope="col"> <i class="fas fa-clipboard-check    "></i> Attend to</th>
    </tr>
  </thead>

  <?php
if($query_run){
foreach($query_run as $row){
      ?>

  <tbody>
  
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['patientsid']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <td><?php echo $row['keen']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td>
        <button class="btn btn-primary editbtn" name="editbtn" type="button"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
      </td>
       <td>
        <button class="btn btn-danger deletebtn" name="delete" type="button"> <i class="fas fa-trash-alt"></i>Delete</button>
      </td>
      <td>
      <a class="btn btn-success" href="nextapp.php" role="button"> <i class="fas fa-clipboard-check    "></i> Attend to</a>
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
              <a class="btn btn-primary" href="index.php" role="button"> <i class="fas fa-backward    "></i> Back Home</a>
              
           </div>
      </div>
      
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> 

<!-- JAVASCRIPT CODES TO UPDATE  AND EDIT DATA-->

<!-- serach function-->
       <script>
        $(document).ready(function() {
    $('#tableid').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );

    

    </script>
<script>
  $(document).ready(function () {
            $('.deletebtn').on('click',function(){
 
              $('#deletemodal').modal('show');

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

    <script>
       $(document).ready(function () {
            $('.editbtn').on('click',function(){
 
              $('#editmodal').modal('show');

              $tr = $(this).closest('tr');

              var data =$tr.children("td").map(function(){
                return $(this).text();

              }).get();

              console.log(data);
// ...<!--update by use of id in the input boxes-->
              $('#updateid').val(data[0]);
              $('#name').val(data[1]);
              $('#patientsid').val(data[2]);
              $('#age').val(data[3]);
              $('#phone').val(data[4]);
              $('#status').val(data[5]);
              $('#keen').val(data[6]);
              $('#date').val(data[7]);

              

       });
      });
    


    </script>
</body>
</html>