<?php
//koneksi Database
$server="localhost";
$user="root";
$pass="";
$database="skanshop";

$koneksi= mysqli_connect($server, $user, $pass, $database)or die (mysqli_error($koneksi));

//jika tombol simpan di klik
//print_r($_POST);exit
if(isset($_POST['bsimpan']))
    {
        //pengujian apakah data akan diedit atau disimpan baru
       if($_GET['hal'] == "edit")
       {
           //data akan diedit
           $edit= mysqli_query($koneksi, "UPDATE reset set
                                        email = '$_POST[temail]' ,
                                         WHERE id ='$_GET[id]'
                                         ");
if($edit) //jika edit sukses
{
echo "<script>
alert('Edit data sukses!');
document.location='resetpass.php';
</script>";
}
else
{
echo "<script>
alert('Edit data GAGAL!!');
document.location='resetpass.php';
</script>";

}
       }
       else
       {
           //data akan disimpan baru
           $simpan= mysqli_query($koneksi, "INSERT INTO reset (email)
                                 VALUES ('$_POST[email]',)
                                 ");
    if($simpan) //jika simpan sukses
    {
      echo "<script>
            alert('simpan data sukses!');
            document.location='resetpass.php';
      </script>";
    }
    else
    {
        echo "<script>
            alert('simpan data GAGAL!!');
            document.location='resetpass.php';
      </script>";

    }
       }

    

    }

    //pengujian jika tombol Edit/hapus di klik
    if(isset($_GET['hal']))
  {
    //pengujian jika edit Data
    if($_GET['hal']== "edit")
    {
    //tampilkan data yang akan diedit
      $tampil = mysqli_query($koneksi, "SELECT * FROM reset WHERE id = '$_GET[id]' ");
      $data = mysqli_fetch_array($tampil);
      if($data)
      {
          //jika data ditemukan,maka data ditampung ke dalam variabel
          $valamatemail = $data['email'];
          
      }
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <style>
      body {height: 100vmax; background: linear-gradient(180deg, #6AC9C9 0%, #43E7FE 100%);}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>reset pass</title>
  </head>
  <body>
      <p><h2 class="text-center">Reset Untuk Lupa Password</h2></p>
      <div class="container">
  <h6 class="text-ligh">Lupa password anda?Masukkan Email anda disini untuk melalui proses reset password</h6>
  <form>
  <div class="form-group">
  <label>Alamat Email</label>
  <input type="text" name="temail" value="<?=@$valamatemail?>" class="form-control" >
    </div>
  <div class="form-group">
      <!-- <button id="Login" a href="" class="btn btn-primary">Login</button> -->
      <div class="text-center">
     <button id="login" type="submit" class="btn btn-primary" name="bsimpan" >SUBMIT</button>
     </div>
  </form>
       
   </div>
   
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
  <div class="text-center mt-3">
   <a href="login.php">Back to Login</a>
  </html>