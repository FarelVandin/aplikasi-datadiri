<form action="inputsiswa.php" method="POST"> 
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input type="number" name="nis" placeholder="Ex. 12003102"/><br>

    <label for="nama">Nama Lengkap :</label><br>
    <input type="text" name="nama" placeholder="Ex. Farel Vandin"/><br>

    <label for="jk">Jenis Kelamin :</label><br>
    <input type="radio" name="jk" Value="Ex. L"/> Laki - Laki
    <input type="radio" name="jk" Value="Ex. P"/> Perempuan<br>

    <label for="kelas">Kelas :</label><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 2"/><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label><br>
    <input type="date" name="tanggal_lahir" /> <br>

    <label for="alamat">Alamat :</label><br>
    <textarea name="alamat" placeholder="Ex. Jl. Arief Rahman" ></textarea><br>

    <label for="eskul">Esktrakurikuler :</label><br>
    <select name="eskul"> <br>
        <option>Pramuka</option>
        <option>Paskibra</option>
        <option>BTQ</option>
        <option>Futsal</option>
        <option>Basketball</option>
    <select> <br>
        
    <label for="nilai" >Nilai:</label>
    <input type="number" name= "nilai" placeholder="Ex. 80.56"/><br>

    <input type="submit" name= "simpan" value="Simpan Data"/>
    <input type="reset" name= "reset" value="Reset Input"/>
</form>

<?php
    if( isset($_POST["simpan"])){
         echo "<hr>";

        //Deklarasi Variable
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["kelas"];
        $tanggal_lahir =date('l,d F Y', strtotime( $_POST["tanggal_lahir"]));
        $alamat = $_POST["alamat"];
        $eskul = $_POST["eskul"];
        $nilai = $_POST["nilai"];

        if ($nilai >= 78){
            $status = "Lulus";
        }else {
            $status = "Belum Lulus";
        }

        //Tampil Data Variable
        echo "
        Hasil Inputan Sebagai Berikut: <br>
        Nomor Induk Siswa : $nis <br>
        Nama Lengkap : $namalengkap <br>
        Jenis Kelamin : $jeniskelamin <br>
        Kelas : $kelas <br>
        Tanggal Lahir : $tanggal_lahir <br>
        Alamat : $alamat <br>
        Ekstrakurikuler: $eskul <br>
        Nilai : $nilai <br>
        Status Kelulusan: $status
        ";
}