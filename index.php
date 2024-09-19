<?php
   // $email = $_POST['email'];
   // $password = $_POST['password'];
   // echo '<h1 class="bg-dark text-white">'.  $email . '</h1"> <br>';
   // echo '<h1 class="bg-dark text-white">'. $password . '</h1> <br>';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pace Koding</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1726480192181-83ad4f2310ad?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }
    </style>

</head>
<body>
    
   <body class="">
    
   <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="max-width : 400px; width: 100%">
            <h1 class="text-center mb-4 fw-bold">INJAK DISINI</h1>
            <form action="" method="$_POST">

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukan Email" require>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukan password" require>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>

            </form>
            <div class="mt-3 text-center">
                <p>Belum Punya akun <a href="">Daftar</a></p>
            </div>
        </div>
   </div>


   </body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>