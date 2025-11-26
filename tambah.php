<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial", sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            width: 420px;
            background: #fff;
            padding: 28px 32px 34px;
            border-radius: 14px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 18px;
            font-size: 22px;
            color: #2e3b4e;
            letter-spacing: 0.5px;
        }

        .btn-back {
            display: inline-block;
            margin-bottom: 16px;
            font-size: 14px;
            text-decoration: none;
            padding: 8px 14px;
            background: #e74a3b;
            color: #fff;
            border-radius: 20px;
        }

        .btn-back:hover {
            background: #c0392b;
        }

        table {
            width: 100%;
        }

        td {
            padding: 6px 0;
            font-size: 14px;
            color: #444;
        }

        input, select {
            width: 100%;
            padding: 9px 10px;
            border: 1px solid #d1d3e2;
            border-radius: 6px;
            outline: none;
        }

        input:focus, select:focus {
            border-color: #4e73df;
            box-shadow: 0 0 6px rgba(78,115,223,0.4);
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background: #4e73df;
            border: none;
            color: #fff;
            margin-top: 12px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
        }

        .submit-btn:hover {
            background: #2e59d9;
        }
    </style>
</head>

<body>

<div class="card">

    <h2>Tambah Data Mahasiswa</h2>

    <a href="index.php" class="btn-back">Kembali</a>

    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
            </tr>
            <tr>
                <td><input type="text" name="nim" required></td>
            </tr>

            <tr>
                <td>Nama</td>
            </tr>
            <tr>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
            </tr>
            <tr>
                <td><input type="text" name="tempat_lahir" required></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
            </tr>
            <tr>
                <td><input type="date" name="tanggal_lahir" required></td>
            </tr>

            <tr>
                <td>Alamat</td>
            </tr>
            <tr>
                <td><input type="text" name="alamat" required></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
            </tr>
            <tr>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>

        <button type="submit" class="submit-btn">Simpan</button>
    </form>

</div>

</body>
</html>
