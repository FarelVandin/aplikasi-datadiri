"<div class='container'>"
<h1>Tambah Data</h1>
<form action="input-nilai-tambah.php" method="POST"> 
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input class="form-control"type="number" name="nis" placeholder="Ex. 12003102"/><br>

    <label for="nama_lengkap">Nama Lengkap :</label><br>
    <input type="text" name="nama_lengkap" placeholder="Ex. Farel Vandin"/><br>

    <label for="kelas"> Kelas :</label><br>
    <input type="text" name="kelas" placeholder="Ex. XI RPL 2"/> <br>

    <label for="kehadiran" >Kehadiran:</label><br>
    <input type="number" name= "kehadiran" placeholder="Ex. 80.56"/><br><br>

    <label for="tugas" >Tugas:</label><br>
    <input type="number" name= "tugas" placeholder="Ex. 80.56"/><br><br>

    <label for="uts" >UTS:</label><br>
    <input type="number" name= "uts" placeholder="Ex. 80.56"/><br><br>

    <label for="uas" >UAS:</label><br>
    <input type="number" name= "uas" placeholder="Ex. 81.56"/><br><br>

    <input type="submit" name= "simpan" value="Simpan Data"/>
    <a href="input-nilai.php"> Kembali </a>
</form>

<?php
      if( isset($_POST["simpan"])){
            $nis= $_POST["nis"];
            $nama= $_POST["nama_lengkap"];
            $kelas= $_POST["kelas"];
            $kehadiran= $_POST["kehadiran"];
            $tugas= $_POST["tugas"];
            $uts= $_POST["uts"];
            $uas= $_POST["uas"];

            // CREATE - Menambahkan Data ke Database
            $query = "
                  INSERT INTO nilai VALUES
                  ('$nis', '$nama', '$kelas', '$kehadiran', '$tugas', '$uts', '$uas');
            ";

            include ('./input-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                  echo "
                        <script>
                              alert('Data berhasil ditambahkan');
                              window.location='input-nilai.php';
                        </script>
                  ";
            }

      }
echo "</div>"
?>