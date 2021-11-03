<?php
    //koneksi Database
    $server= "localhost";
    $user= "root";
    $pass= "";
    $database= "dbproduk";

    $koneksi= mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));


//jika tombol simpan di klik
//print_r($_POST);exit
if(isset($_POST['bsimpan']))
{
    //pengujian apakah data akan diedit atau disimpan baru
        if($_GET['hal'] == "edit")
        {
            //Data akan di edit
                //data akan disimpan baru
                $edit = mysqli_query($koneksi, "UPDATE tmhs set
                `Produk`='".$_POST['tproduk']."',
                `Nama Produk`='".$_POST['tnamaproduk']."',
                `Harga Produk`= '".$_POST['thargaproduk']."',
                `Keterangan`='".$_POST['tketerangan']."'
                WHERE ID='".$_GET['id']."'
                ");
                
                if($edit) //jika edit sukses
                    {
                    echo "<script>
                            alert('edit data sukses!');
                            document.location='deskripsi.php';
                    </script>";
                    } else {
                    echo "<script>
                        alert('edit data GAGAL!!');
                        document.location='deskripsi.php';
                </script>";

                }
        } else {
            $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (`Produk`,`Nama Produk`,`Harga Produk`,`Keterangan`)
                                          VALUES ('$_POST[tproduk]',
                                                 '$_POST[tnamaproduk]',
                                                 '$_POST[thargaproduk]',
                                                 '$_POST[tketerangan]')
                                         ");

                                         
                    if($simpan)//Jika simpan suksess
                    {
                        echo "<script>
                                alert('Simpan data suksess!');
                                document.location='deskripsi.php';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                                alert('Simpan data GAGAL!!');
                                document.location='deskripsi.php';
                            </script>";
                    }
                }       

}
?>
<!doctype html>
<html>
  <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>posting deskripsi</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <style>
      body { height: 150vh; background: linear-gradient(180deg, #6AC9C9 0%, #43E7FE 100%);}
    </style>
  <body>
    <!-- awal card form -->

    <div class="container">
        <h2 class="text-center">Postingan</h2>
  <div class="card m-2">
    <div class="col-12 text-center mt-3">
        <a href=""><img src="user 1.png" width="100" height="100">
        <p style="font-size: 10px;">FOTO DARI ALBUM/FOTO</p>
        </a>
      </div>
      <div class="form-floating mt-3">
        <input type="text" name="tnamaproduk" value="<?=@$vnamaproduk?>" class="form-control" id="floatingInput" placeholder="Nama Produk">
        <label for="floatingInput">Nama Produk</label>
</div>
<div class="form-floating mt-3">
        <input type="text" name="thargaproduk" value="<?=@$vhargaproduk?>" class="form-control" class="form-control " id="floatingPassword" placeholder="Harga">
        <label for="floatingInput">Harga</label>
      </div>
      <div class="card-body"></div>
    </div>
  <div class="text-ligh mt-2">Deskripsi Item</div>
  <div class="card">
    <div class="form-floating">
        <input type="text" name="tketerangan" value="<?=@$vketerangan?>" class="form-control " id="floatingPassword" placeholder="Keterangan">
        <label for="floatingInput">Keterangan</label>
      </div>
    <div class="card-body">
        </div>
        </div>
      <hr>
      <div class="d-flex justify-content-around">
        <div class="text-center mt-5">
            <!-- <button id="Login" a href="" class="btn btn-primary">Login</button> -->
            <a id="login" type ="submit" class="btn btn-primary" href=".html" role="button">Posting</a>
            </div>
      </div>
  </div>

</form>
    </div>
    </div>

    <!-- akhir card form -->
  </body>
</html>