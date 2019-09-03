<?php 
include 'connection.php';

   
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
    <title>Document</title>
</head>

<body>
    <?php 
    
       $sql = "SELECT * FROM tblemployee";
       $result = mysqli_query($conn, $sql);
      
    ?>
    <div class="container">
        <form action="" method="get">
        <button type="submit" class="btn btn-warning btn-md"><a href="index.php" class="text-light">Add New</a></button>
            <table class="table table-hover table-bordered">
                <thead class="text-center thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    if (mysqli_num_rows($result) > 0) 
                    {
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                             ?>
                    <tr class="table-dark text-center">
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["empname"];?></td>
                        <td><?php echo $row["eaddress"];?></td>
                        <td><?php echo $row["gender"];?></td>
                        <td><?php echo $row["mobile"];?></td>
                        <td><?php echo $row["email"];?></td>
                        <td><button type="submit" class="btn btn-primary btn-sm bt"><a href="delete.php? id= <?php echo $row['id'];?>" class="text-light"> Delete</a></button></td>
                        <td><button type="submit" class="btn btn-danger btn-sm bt" id=<?php echo $row["id"];?>>Delete</button>
                        </td>
                    </tr>
                    <?php
                         }
                    }   
          
                ?>


                </tbody>

            </table>
        </form>

    </div>
    <script>
    $(document).ready(function() {
        $('.bt').click(function() {


            var th = $(this);
            var id = $(this).attr("id");

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                timer: 150000,
            }).then(function(){

                $.ajax({
                        url: 'delete.php',
                        type: 'get',
                        data: {id: id},
                        success: function(data) {
                            th.parents('tr').hide();
                        }
                    })


                Swal.fire(
                        'Deleted!',
                        'Your record has been deleted.',
                        'success'
                    )
            });
                
        });
    });
    </script>

</body>

</html>