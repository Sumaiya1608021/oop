<?php

include_once 'classes/Register.php';
$re= new Register();


if($_SERVER['REQUEST_METHOD']=='POST'){

$register = $re->addRegister($_POST,$_FILES);

}

?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
    <br><br>
    <div class="container">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card shadow">

                <?php
                
                if(isset($register)){
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?=$register?></strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php




                }
                
                ?>



                    <div class="card-header">
                        <h1>Student Regestration Form</h1>
                    </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                                <label for="">Phone</label>
                                <input type="number" name="phone" placeholder="Enter Your phone number" class="form-control"> 
                                <label for="">Photo</label>
                                <input type="file" name="photo" class="form-control">
                                <label for="">Address</label>
                                <textarea name="address"class="form-control"></textarea>
                                <br>
                                <input type="Submit" value="Register" class="btn btn-success form-control">

                            </form>



                        </div>
                </div>

            </div>

        </div>





    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>