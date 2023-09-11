<?php include('includes/header.php')?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Registration Form</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                       <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter your first name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter your last name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" name="phone_number" class="form-control" placeholder="Enter your Phone number">
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="create_btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')?>