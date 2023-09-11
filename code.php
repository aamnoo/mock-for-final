<!-- 
// $conn = mysqli_connect("localhost","root","","mycrud");
// if(isset($_POST['create_btn']))
// {
//     $fname = $_POST['first_name'];
//     $lname = $_POST['last_name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $phone = $_POST['phone_number'];

//     $query = "INSERT INTO create (fname,lname,email,password,phone) VALUES ('$fname','$lname','$email','$password','$phone')";
//     $query_run = mysqli_query($conn, $query);

//     if($query_run)
//     {
//         echo "Registered successfully";
//     }
//     else
//     { 
//         echo "Found an error";
//     }
// } -->
<?php
$conn = mysqli_connect("localhost", "root", "", "mycrud");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['create_btn'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone_number']);

    $query = "INSERT INTO `create` (fname, lname, email, password, phone) VALUES ('$fname', '$lname', '$email', '$password', '$phone')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // echo "Registered successfully";
        header('location: index.php');
    } else {
        // echo "Error: " . mysqli_error($conn);
        header('location: create.php');
    }
}

mysqli_close($conn);
?>

