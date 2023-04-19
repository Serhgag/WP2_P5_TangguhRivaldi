<html>

<head>
    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                <td>
                    <?= $NIS; ?>
                </td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tempat_lahir; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jenis_kelamin; ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $Agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('datasiswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>