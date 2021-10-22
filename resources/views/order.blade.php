<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="width: 80%; margin: 10px;">
            <div class="col">
                <h2>Order list</h2>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderaddmodal">
                  Create
                </button>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:90%; margin: 10px;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>Edinburgh</td>
                    <td>   
                        <select class="form-control" placeholder="Select status...">
                            <option value="1">transformed</option>
                            <option value="2">pending</option>
                            <option value="3">delivered</option>
                            <option value="4">cancelled </option>                          
                        </select>
                    </td>
                    <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleEdit">
                    Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleDelete">
                    Delete
                    </button>
                    </td>
                </tr>
            <tbody>
        </table>
    </div> 

    <!-- Modal -->
    <div class="modal fade" id="orderaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addform">
            <div class="modal-body">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Address...">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputRole1">Status</label>
                    <select class="form-control" placeholder="Select role...">
                        <option value="1">transformed</option>
                        <option value="2">pending</option>
                        <option value="3">delivered</option>
                        <option value="4">cancelled </option>                    
                    </select>
                    </div>
          </div>
          </form>  
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    
        <!-- Modal Edit-->
        <div class="modal fade" id="exampleEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form>
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="name" class="form-control" id="exampleInputName1" placeholder="Name...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="phone" class="form-control" id="exampleInputEmail1" placeholder="Phone...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="phone" class="form-control" id="exampleInputEmail1" placeholder="Address...">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputRole1">Status</label>
                    <select class="form-control" placeholder="Select role...">
                        <option value="1">transformed</option>
                        <option value="2">pending</option>
                        <option value="3">delivered</option>
                        <option value="4">cancelled </option>                    
                    </select>
                    </div>
                </form>  
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div> 

        <!-- Modal Delete-->
        <div class="modal fade" id="exampleDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Delete ?
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Delete</button>
            </div>
            </div>
        </div>
    </div> 
    <!-- <script>
        $('#exampleModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          
          $('#addform').on('submit', function(e){
              e.preventDefault();
              $.ajax({
                  type: "POST",
                  url: "/orderadd",
                  data: $('#addform').serialize(),
                  success: function (response) {
                      console.log(response)
                      $('#orderaddmodal').modal('hide')
                      alert("Data Saved");
                  },
                  error: function(error){
                      console.log(error)
                      alert("Data not Saved");
                  }
              });
          });
      });
    </script>
</body>
</html>