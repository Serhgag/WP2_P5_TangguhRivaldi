<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>

    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>" method="post">
            <table border=0 align="center">
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="NIS" id="NIS">
                    </td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <select name="kelas" id="kelas">
                            <option value="">Pilih Kelas</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="datetime-local" name="tanggal_lahir" id="tanggal_lahir" />
                    </td>
                </tr>
                <tr>
                    <th>Tempat lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>
</head>

</html>