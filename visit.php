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

    <div class="card">
      
   
    <!DOCTYPE html>

    <h1>DOCTORS APPOINTMENT SYSTEM</h1>
       
    
</head>
<body>
  <a href="nextvisit.php" class="list-group-item list-group-item-action active">Add New Appointments</a>


  <!-- delete modal -->
<div class="modal fade" id="deletemodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash    "></i> Confirm You Want To delete</h5>
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
        <button type="delete" name ="delete" class="btn btn-primary"> <i class="fas fa-trash-alt"></i> Yes !! Delete</button>
      </div>
      </form>

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
              <table  id="tableid" class="table table-dark">
  <thead>
    <h3>TODAY'S APPOITMENTS</h3>
    <tr>
      <th scope="col">#</th>
      <th scope="col">APPOINTMENT ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">EMAIL  <i class="fas fa-copy    "></i></th>
      <th scope="col">APPOINTMENT DATE</th>

      <th scope="col"> <i class="fas fa-mail-bulk    "></i> </th>
      <th scope="col"><i class="fas fa-trash-alt"></i>DELETE</th>
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
      <a class="btn btn-primary" href="\New\mailsend/index.php" role="button"> <i class="fas fa-mail-bulk    "></i> Send Email</a>    
      </td>
      </td>
       <td>
        <button class="btn btn-danger delete" name="delete" type="button"><i class="fas fa-trash-alt    "></i>Delete</button>
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








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  

<div class="card"></div>
    <div class="card-body"></div>
    <script>
        $(document).ready(function() {
    $('#tableid').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
    </script>
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
</div>