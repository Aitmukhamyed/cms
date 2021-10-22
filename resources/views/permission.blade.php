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
                <h2>User list</h2>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Create
                </button>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:90%; margin: 10px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleEdit">
                                    <span>Edit</span>
                            </button>  
                            <button type="button" class="btn btn-danger">
                                <a href="{{ url('delete_user/'.$user->id) }}" onclick="return confirm('Are you sure to want to delete it?')">
                                <span>Delete</span>
                            </button>  
                        </a>
                        </td>
                    </tr>
                @endforeach
            <tbody>
        </table>
    </div> 

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email...">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputRole1">Role</label>
                    <select class="form-control" placeholder="Select role...">
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="3">Operator</option>
                        <option value="4">Staff</option>                    
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
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email...">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputRole1">Role</label>
                    <select class="form-control" placeholder="Select role...">
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="3">Operator</option>
                        <option value="4">Staff</option>                    
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
    <script>
        $('#exampleModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
</body>
</html>