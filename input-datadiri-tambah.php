<div class='container'>
<h1>Tambah Data</h1>

<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk SIswa :</label>
    <input class="form-control" type="number" name="nis" placeholder="Ex. 12003102"/><br>

    <label for="nis">Nama Lengkap :</label>
    <input class="form-control" type="text" name="nama" placeholder="Ex. Agung Aryanto"/><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label>
    <input class="form-control" type="date" name="tanggal_lahir"/><br>

    <label for="nilai">Nilai :</label>
    <input class="form-control" type="number" name="nilai"/><br>

    <input class='btn btn-success btn-sm'type="submit" name="Simpan" value="Simpan Data" />
    <a class='btn btn-secondary btn-sm'href="input-datadiri.php">Kembali</a>
</form>

<?php

include('./input-config.php');
if ($_SESSION["login"] != TRUE){
    header('location:login.php');

}

if ($_SESSION["role"] != "admin" ){
    echo "
        <script>
        alert('Akses tidak diberikan, Kamu Bukan Admin');
        window.location='input-datadiri.php';
        </script>
        
        ";
}

    if(isset ($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        $query = 
        "INSERT INTO datadiri VALUES('$nis', '$nama ', '$tanggal_lahir', '$nilai','','')";

        echo $query;
    

   
    $insert = mysqli_query($mysqli, $query);

    if ($insert){
        echo "
        <script>
        alert('Data Berhasil Ditambahkan');
        window.location='input-datadiri.php';
        </script>
        
        ";
    }

}
echo "</div>";
?>