<?php include('includes/header.php')?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>PHP CRUD
                          <a href="create.php" class="btn btn-primary float-right">CREATE</a>
                        </h4>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">EDIT</th>
                                    <th scope="col">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                      <a href="create-edit.php" class="btn btn-info">EDIT</a>
                                    </td>
                                    <td>
                                      <a href="create-delete.php" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php')?>




    