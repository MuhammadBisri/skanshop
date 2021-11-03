<?php

//untuk penghubung dengan file koneksi
    include 'koneksi.php';

    if(isset($_POST['input'])){
        $email = $_POST['email'];
        $password= $_POST['password'];

        //ambil data dari database tabel login dengan username dan password yang sesuai
        $data = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password' ");

        if(mysqli_num_rows($data)){
            header("location:home.html");
        }
        else{
            echo "Login Gagal";
            
        }
      

    }


?>