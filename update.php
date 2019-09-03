<?php include 'connection.php';
if(isset($_POST['submit']))
{
    $id=$_GET['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $sql = "update tblemployee set id=$id,empname='$name',eaddress='$address',gender='$gender',mobile='$mobile',email='$email' where id=$id ";


    if ($conn->query($sql) === TRUE) {
        header("Location:employees.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script scr="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Update</title>
</head>
<body>
<div class="container">
        <form action="" method="post">
            <div class="card mt-5">
                <div class="card-header bg-light">
                    <h1 class="text-primary text-center">EMPLOYEE</h1>
                </div>
                <div class="card-body" style="place-content:center;">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="validationCustom01" class="col-form-label">Name</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="validationCustom01" class="col-form-label">Address</label>
                        </div>
                        <div class="col-md-4">
                        <textarea class="form-control" name="address" rows="3" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="validationCustom01" class="col-form-label">Gender</label>
                        </div>
                        <div class="col-md-4"><br />
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="validationCustom01" class="col-form-label">Mobile</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="validationCustom01" class="col-form-label">Email</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success" value="submit" name="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>