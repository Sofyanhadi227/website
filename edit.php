<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <style>
        /* Reset sederhana */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .wrapper {
            width: 100%;
            max-width: 520px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.25);
            overflow: hidden;
            animation: fadeIn 0.5s ease-in-out;
        }

        .card-header {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            padding: 18px 22px;
            color: #f9fafb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h2 {
            font-size: 18px;
            letter-spacing: 0.5px;
        }

        .badge {
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.25);
            border: 1px solid rgba(148, 163, 184, 0.7);
        }

        .card-body {
            padding: 22px 24px 24px 24px;
        }

        .top-actions {
            margin-bottom: 16px;
        }

        .top-actions a {
            text-decoration: none;
            font-size: 13px;
            color: #2563eb;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .top-actions a span {
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 5px;
        }

        .form-note {
            font-size: 11px;
            color: #6b7280;
            margin-bottom: 4px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 9px 11px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 13px;
            transition: all 0.18s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #2563eb;
            outline: none;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.18);
        }

        select {
            background-color: #ffffff;
        }

        .row {
            display: flex;
            gap: 12px;
        }

        .col {
            flex: 1;
        }

        .btn-submit {
            width: 100%;
            margin-top: 8px;
            padding: 11px;
            border-radius: 999px;
            border: none;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #f9fafb;
            letter-spacing: 0.3px;
            box-shadow: 0 8px 18px rgba(37, 99, 235, 0.45);
            transition: transform 0.15s ease, box-shadow 0.15s ease, opacity 0.15s ease;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 22px rgba(37, 99, 235, 0.6);
            opacity: 0.96;
        }

        .btn-submit:active {
            transform: translateY(0);
            box-shadow: 0 5px 12px rgba(37, 99, 235, 0.4);
        }

        .footer-note {
            text-align: center;
            font-size: 11px;
            color: #9ca3af;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="card">
        <div class="card-header">
            <h2>Form Edit Data Mahasiswa</h2>
            <div class="badge">Mode Edit</div>
        </div>

        <div class="card-body">
            <div class="top-actions">
                <a href="index.php">
                    <span>←</span> Kembali ke Daftar
                </a>
            </div>

            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
            $d = mysqli_fetch_assoc($data);
            ?>

            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                <div class="form-group">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" value="<?php echo $d['nim']; ?>" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>">
                    </div>
                    <div class="form-group col">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                </div>

                <div class="form-group">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin">
                        <option value="Laki-laki" <?php if($d['jenis_kelamin']=="Laki-laki") echo "selected"; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if($d['jenis_kelamin']=="Perempuan") echo "selected"; ?>>Perempuan</option>
                    </select>
                </div>

                <button class="btn-submit" type="submit">
                    Simpan Perubahan
                </button>
            </form>

            <p class="footer-note">
                Sistem Informasi Akademik • Form Edit Mahasiswa
            </p>
        </div>
    </div>
</div>

</body>
</html>
