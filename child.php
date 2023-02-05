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

    <h1>  CHILDS REGISTRATION FORM <i class="fas fa-child    "></i></h1>
       
    
</head>
<body>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="mothersreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-address-book    "></i>Add child details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertc.php" method="POST">
      <div class="modal-body">
  <div class="form-group">
    <label >Name: </label>
    <input type="text" name="name" value="" placeholder="Enter Name" class="form-control">
  </div>
  <div class="form-group">
    <label >Age: </label>
    <input type="text" name="age" value="" placeholder="Enter age in weeks" class="form-control">
  </div>
  <label>Gender: </label>
  <div class="form-check">
 
  <input class="form-check-input" type="checkbox" value="Male" name="gender" id="defaultCheck1">
  <label class="form-check-label" for="female">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Male" id="defaultCheck2" name="gender">
  <label class="form-check-label" for="defaultCheck2">
    Female
  </label>
</div>
<div class="form-group">
    <label >Date: </label>
    <input type="date" name="date1" value="" placeholder="Enter date" class="form-control">
  </div>
  
    <label >Birth Place</label>
    <select class="form-control" id="exampleFormControlSelect1" name="place" class="form-control">
      <option>Home</option>
      <option>Hospital</option>
      <option></option>
      <div class="form-group">
    </select>
    <label >Birth vaccine</label>
    <select class="form-control" id="exampleFormControlSelect1" name="vaccine" class="form-control">
      <option>BCG,polio1 & Hepatities B</option>
      
    </select>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fas fa-closed-captioning    "></i> Close</button>
        <button type="submit" name ="submit"class="btn btn-primary"> <i class="fas fa-save    "></i> Save Details</button>
      </div>
      </form>
    </div>
  </div>
</div>
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
    <label >Age: </label>
    <input type="text" name="age"  id="age" value="" placeholder="Enter age in weeks" class="form-control">
  </div>
  <label >Gender: </label>
  <div class="form-check">
 
  <input class="form-check-input" type="checkbox" value="Male" name="gender" id="gender">
  <label class="form-check-label" for="female">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Female" id="gender" name="gender">
  <label class="form-check-label" for="defaultCheck2">
    Female
  </label>
</div>
<div class="form-group">

    <label >Date: </label>
    <input type="date" name="date1" id="date1" value="" placeholder="Enter date" class="form-control">
  </div>
  
    <label >Birth Place</label>
    <select class="form-control" id="place" name="place" class="form-control">
      <option>Home</option>
      <option>Hospital</option>
      <option></option>
      <div class="form-group">
    </select>
    <label >Birth vaccine</label>
    <select class="form-control" id="vaccine" name="vaccine" class="form-control">
      <option>BCG,polio1 & Hepatities B</option>
      
    </select>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fas fa-closed-captioning "></i><i class="fas fa-closed-captioning    "></i> Close</button>
        <button type="submit" name ="update"class="btn btn-primary"> <i class="fas fa-upload    "></i> update Details</button>
      </div>
      </form>

    </div>
  </div>
</div>
<!--END OF POPUP EDIT-->
<!-- delete modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Confirm You Want To delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="deletec.php" method="POST">
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


<!-- delete EDIT-->


    <div class="container">
      <div class="jumbotron">
          <div class="card">
          <H2> <i class="fas fa-child    "></i> REGISTER CHILD</H2>
          </div> 
          <div class="card">
              <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mothersreg">
            <i class="fas fa-address-book    "></i> ADD DETAILS
         </button>          
        </div>
          </div>

<!-- fetching from database to the table -->

          <div class="card">
              <div class="card-body">
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

$query = "SELECT * FROM child";
$query_run = mysqli_query($conn, $query);
?>
              <table class="table table-dark">
  <thead>
    <h3>SCHEDULE</h3>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Names</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Date</th>
      <th scope="col">Birth Place</th>
      <th scope="col">Birth Place</th>
      <th scope="col"> <i class="fas fa-edit    "></i> Edit </th>
      <th scope="col"><i class="fas fa-trash-alt"></i>Delete</th>
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
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['date1']; ?></td>
      <td><?php echo $row['place']; ?></td>
      <td><?php echo $row['vaccine']; ?></td>
      <td>
        <button class="btn btn-primary editbtn" name="editbtn" type="button"> <i class="fas fa-edit    "></i> Edit</button>
      </td>
       <td>
        <button class="btn btn-danger deletebtn" name="delete" type="button"><i class="fas fa-trash-alt"></i> Delete</button>
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
           </div>
      </div>
      <a class="btn btn-primary" href="index.php" role="button">Back Home</a>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- JAVASCRIPT CODES TO UPDATE  AND EDIT DATA-->
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
              $('#age').val(data[2]);
              $('#gender').val(data[3]);
              $('#date1').val(data[4]);
              $('#place').val(data[5]);
              $('#vaccine').val(data[6]);

       });
      });
    


    </script>
</body>
</html>