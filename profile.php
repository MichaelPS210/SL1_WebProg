<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="header">
        <div class="judul">
            <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="home_icon">
            <a href="home.php">Home</a>
        </div>
        <div class="profile_icon">
            <a href="profile.php">Profile</a>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="middle">
        <div class="atas">
            <h3>Profil Pribadi</h3>
        </div>
        <div class="bawah">
            <div class="isi_data">
                <table style="width:300px; height:200px;">
                    <tr>
                        <td>Nama Depan</td>
                        <td><p><?php session_start(); echo "<b>".$_SESSION['nama_depan_regis']."</b>";?></p></td>
                    <tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><?php echo "<b>".$_SESSION['tempat_lahir_regis']."</b>";?></td>
                    <tr>
                        <td>Warga Negara</td>
                        <td><?php echo "<b>".$_SESSION['warga_negara_regis']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo "<b>".$_SESSION['alamat_regis']."</b>";?></td>
                    <tr>
                </table>
            </div>
            <div class="isi_data">
                <table style="width:450px; height:200px;">
                    <tr>
                        <td>Nama Tengah</td>
                        <td><?php echo "<b>".$_SESSION['nama_tengah_regis']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php echo "<b>".$_SESSION['tanggal_lahir_regis']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo "<b>".$_SESSION['email_regis']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td><?php echo "<b>".$_SESSION['kode_pos_regis']."</b>";?></td>
                    <tr>
                </table>
            </div>
            <div class="isi_data">
                <table style="width:450px; height:200px;">
                    <tr>
                        <td>Nama Belakang</td>
                        <td><?php echo "<b>".$_SESSION['nama_belakang_regis']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>NIK</td>
                        <td><?php echo "<b>".$_SESSION['nik_regis']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>No HP</td>
                        <td><?php echo "<b>".$_SESSION['no_hp_regis']."</b>";?></td>
                    <tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td><img src="./<?= $_SESSION['berkas'] ?>" style="max-height:150px"></td>
                    <tr>
                </table>
            </div>    
        </div>
    </div>
</body>
</html>
                