<h1>Tambah Data</h1>
<form action="input-nilai-tambah.php" method="POST"> 
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input type="number" name="nis" placeholder="Ex. 12003102"/><br>

    <label for="nama_lengkap">Nama Lengkap :</label><br>
    <input type="text" name="nama" placeholder="Ex. Farel Vandin"/><br>

    <label for="kelas"> Kelas :</label><br>
    <input type="text" name="tanggal_lahir" /> <br>

    <label for="kehadiran" >Kehadiran:</label><br>
    <input type="number" name= "nilai" placeholder="Ex. 80.56"/><br><br>

    <label for="tugas" >Tugas:</label><br>
    <input type="number" name= "nilai" placeholder="Ex. 80.56"/><br><br>

    <label for="uts" >UTS:</label><br>
    <input type="number" name= "nilai" placeholder="Ex. 80.56"/><br><br>

    <label for="uas" >UAS:</label><br>
    <input type="number" name= "nilai" placeholder="Ex. 80.56"/><br><br>

    <input type="submit" name= "simpan" value="Simpan Data"/>
    <a href="input-nilai.php"> Kembali </a>
</form>

<?php
    if( isset($_POST["simpan"])){
        $nis= $_POST["nis"];
        $nama= $_POST["nama"];
        $kelas= $_POST["kelas"];
        $kehadiran= $_POST["kehadiran"];
        $tugas= $_POST["tugas"];
        $uts= $_POST["uts"];
        $uas= $_POST["uas"];

        echo $nis . "<br>";
        echo $nama . "<br>";
        echo $kelas . "<br>";
        echo $kehadiran . "<br>";
        echo $tugas . "<br>";
        echo $uts . "<br>";
        echo $uas . "<br>";

        //CREATE - Menambahkan Data ke Database
        $query = "
        INSERT INTO nilai VALUES
        ('$nis', '$nama', '$kelas', '$kehadiran', '$tugas', '$uts','$uas');
        ";

        include ('./input-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
            <script>
            alert('Data Berhasil Ditambahkan');
            window.location= 'input-nilai.php';
            </script>
            ";
        }
        }
?>