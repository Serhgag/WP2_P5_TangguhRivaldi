<html>

<head>

    <style>
        table,
        td {
            border: 5px solid #cccc;
            font-family: verdana;
            font-size: 100%;
            padding: 1px 50px;
            background-color: #3CBC8D;
            color: white;


        }



        th {
            font-family: verdana;
            font-size: 100%;
        }


        body {
            background-color: powderblue;
        }

        h1 {
            color: white;
        }

        center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        td {
            font-size: 23;
            padding: 12px 20px;

        }

        a {
            width: 30%;
            background-color: #4CAF50;
            color: white;
            padding: 1px 50px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>


    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>

        <table>
            <tr>
                <th colspan="3">
                    <h1>Tampil Data Siswa</h1>
                </th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIS Siswa</td>
                <td>:</td>
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
                <td>Tempat lahir</td>
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
            </tr>

            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
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