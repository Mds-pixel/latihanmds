<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
</head>
<body>
     <h1>Form Siswa</h1><hr>

     <div>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"
                value="<?php echo set_value('nama'); ?>">
                    <?php echo form_error('nama','<div class="error"/> ');?></td>
            </tr>

            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="<?php echo set_value('nis'); ?>">
                    <?php echo form_error('nis','<div class="error"/> ');?></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            
            <tr>
                <td>T lahir</td>
                <td><input type="text" name="lahir"></td>
            </tr>

            <tr>
                <td>Tgl lahir</td>
                <td><input type="date" name="tanggal"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td>Kelamin</td>
                <td>
                <input type="radio" name="kelamin" value="L">Laki-laki
                <input type="radio" name="kelamin" value="P">Perempuan
                </td>
            </tr>

            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama">
                        <option value="islam">Islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katolik">katolik</option>
                        <option value="budha">budha</option>
                        <option value="hindu">hindu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
        </form>
     </div>
</body>
</html>