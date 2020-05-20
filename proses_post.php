<?php
if (isset($_POST['nama']) AND isset($_POST['email']))
{
   $nama=$_POST['nama'];
   $email=$_POST['email'];
   $nama=htmlspecialchars($nama);
   $email=strip_tags($email);
}
else
{
   header("Location:post.php?error=variabel_belum_diset");
}
  
if(empty($nama))
{
   header("Location:post.php?error=nama_kosong");
}
else
{
   if (is_numeric($nama))
   {
      header("Location:post.php?error=nama_harus_huruf");
   }
   else
   {
      echo "Nama: $nama <br /> Email: $email";
   }
}  
?>