

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <!DOCTYPE html>

    <h1>ENTER HEALTH RECORDS</h1>
    !!!!!!!! FILL ALL AREAS:
       
    
</head>

<body>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="mothersreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Health details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="inserth.php" method="POST">
      <div class="modal-body">
      
  <div class="form-group">
    <label >Weight: </label>
    <input type="text" name="weight" value="" placeholder="Enter Weight in KGs" class="form-control">
  </div>
  <div class="form-group">
    <label >Height: </label>
    <input type="text" name="height" value="" placeholder="Enter Height in Centimeters " class="form-control">
  </div>
  <div class="form-group">
    <label >Temperature: </label>
    <input type="text" name="temp" value="" placeholder="Enter Temp in ''C"class="form-control">
  </div>
  <div class="form-group">
    <label >Age: </label>
    <input type="text" name="age" value="" placeholder="Enter  age"class="form-control">
  </div>
  <div class="form-group">
    <label >Symptoms</label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
  
  </div>
  
  <div class="form-group">
    <label >Next Visit: </label>
    <input type="date" name="date2" value="" placeholder="Enter date" class="form-control">
  </div>

  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close</button>
        <button type="submit" name ="submit"class="btn btn-primary">Save Details</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--delete model-->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Health details <i class="fas fa-recycle    "></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="delete.php" method="POST">
      <div class="modal-body">
 
 <h4>Do you want to delete</h4>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="delete" name ="delete"class="btn btn-primary"> <i class="fas fa-trash-alt"></i>Yes !! Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>



    <div class="container">
      <div class="jumbotron">

          <div class="card">

          <H2> <i class="fas fa-clipboard-check    "></i> HEALTH RECORDS</H2>
          </div> 
          <div class="card">
              <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mothersreg">
              <i class="fas fa-address-book    "></i> ADD DETAILS <i class="fas fa-address-book    "></i>
         </button>          
        </div>
          </div>
          <!-- fetching from the database to table -->
          
      </div> 
      <a class="btn btn-primary" href="index.php" role="button"> <i class="fas fa-backward    "></i> Back Home</a>
 
    </div>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="card"></div>
    <div class="card-body"></div>
    <script>
      
       $(document).ready(function () {
            $('.deletebnt').on('click',function(){
 
              $('#deletemodal').modal('show');

             // $tr = $(this).closest('tr');

              //var data =$tr.children("td").map(function(){
               // return $(this).text();

             // }).get();

              //console.log(data);

             // $('#updateid').val(data[0]);
            });
      });
    </script>
</body>
</html>