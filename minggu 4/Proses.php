<!DOCTYPE html>
<html lang="en">
    <style>
        .th{
                border : 2px solid black;
                font-size: 15px;  
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table rules="rows" border="2" cellpadding="5">
        <tr>
            <th class="th">
                Data Input Formulir Pendaftaran
            </th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama'] ?></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?php echo $_POST['asalsekolah'] ?></td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><?php echo $_POST['nisn'] ?></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>:</td>
            <td><?php echo $_POST['tahun'] ?></td>
        </tr>
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><?php echo $_POST['namadepan'] ?></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><?php echo $_POST['namabelakang'] ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $_POST['nik'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['ttl'] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_POST['jk'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $_POST['Alamat'] ?></td>
        </tr>
        <tr>
            <td>Desa/Kel</td>
            <td>:</td>
            <td><?php echo $_POST['desa'] ?></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><?php echo $_POST['kec'] ?></td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td>:</td>
            <td><?php echo $_POST['kab'] ?></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><?php echo $_POST['prov'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $_POST['Email'] ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?php echo $_POST['hobi'] ?></td>
        </tr>
        <tr>
            <td>No Kartu Keluarga</td>
            <td>:</td>
            <td><?php echo $_POST['kk'] ?></td>
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><?php echo $_POST['ayah'] ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $_POST['Agama'] ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $_POST['pekerjaan'] ?></td>
        </tr>
        <tr>
            <td>Sudah mengisi formulir dengan benar</td>
            <td>:</td>
            <td><?php echo $_POST['isi'] ?></td>
        </tr>
    </table>
</body>
</html>