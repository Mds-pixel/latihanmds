
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Siswa</th>
            </tr>
            <tr>
                <td colspan="3">
            <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <th>:</th>
                <td><?= $nis; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <th>:</th>
                <td><?= $kelas; ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <th>:</th>
                <td><?= $lahir .' , '. $tanggal ; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <th>:</th>
                <td><?= $alamat; ?></td>
            </tr>
            <tr>
                <td>Kelamin</td>
                <th>:</th>
                <td><?= $kelamin; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <th>:</th>
                <td><?= $agama; ?></td>
            </tr>
            

            <tr>
                <td colspan="3" align="center"><a href="<?= base_url('siswa'); ?>">Kembali</a></td>
            </tr>
        </table>
    </center>
        
 

