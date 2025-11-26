<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: auth/login.php");
    exit;
}
include 'koneksi.php';
$no   = 1;
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD Data Mahasiswa</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 10px;
        }

        .container {
            background: #ffffff;
            width: 100%;
            max-width: 900px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            padding: 24px 28px 32px;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            color: #2e3b4e;
            letter-spacing: 0.5px;
        }

        .user-info {
            font-size: 14px;
            color: #555;
            text-align: right;
        }

        .user-info span {
            font-weight: bold;
            color: #2e3b4e;
        }

        .logout-btn {
            display: inline-block;
            margin-top: 6px;
            padding: 6px 14px;
            font-size: 13px;
            text-decoration: none;
            background: #e74a3b;
            color: #fff;
            border-radius: 20px;
            transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
        }

        .logout-btn:hover {
            background: #c0392b;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(231,74,59,0.4);
        }

        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 18px 0 14px;
        }

        .toolbar-left {
            font-size: 14px;
            color: #666;
        }

        .btn-primary {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background: #4e73df;
            color: #fff;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.3px;
            transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
        }

        .btn-primary:hover {
            background: #2e59d9;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(78,115,223,0.5);
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 8px;
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background: #f8f9fc;
        }

        th, td {
            padding: 10px 12px;
            font-size: 14px;
            border-bottom: 1px solid #e3e6f0;
            text-align: left;
        }

        th {
            font-weight: 600;
            color: #4b4b4b;
        }

        tbody tr:nth-child(even) {
            background: #fafbff;
        }

        tbody tr:hover {
            background: #eef3ff;
        }

        td:first-child {
            width: 50px;
            text-align: center;
            color: #555;
        }

        .aksi-link a {
            font-size: 13px;
            text-decoration: none;
            margin-right: 8px;
            padding: 4px 10px;
            border-radius: 14px;
            transition: background 0.15s ease, color 0.15s ease;
        }

        .aksi-edit {
            background: #e8f0ff;
            color: #2e59d9;
        }

        .aksi-edit:hover {
            background: #2e59d9;
            color: #fff;
        }

        .aksi-hapus {
            background: #fdecea;
            color: #e74a3b;
        }

        .aksi-hapus:hover {
            background: #e74a3b;
            color: #fff;
        }

        .empty {
            text-align: center;
            padding: 18px;
            font-size: 14px;
            color: #777;
        }

        @media (max-width: 768px) {
            .container {
                padding: 18px 16px 24px;
            }

            .title {
                font-size: 18px;
            }

            th, td {
                font-size: 13px;
                padding: 8px;
            }

            .toolbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header-top">
        <div class="title">CRUD Data Mahasiswa</div>
        <div class="user-info">
            Login sebagai: <span><?php echo htmlspecialchars($_SESSION['username']); ?></span><br>
            <a href="auth/logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <div class="toolbar">
        <div class="toolbar-left">
            Kelola data mahasiswa (Create, Read, Update, Delete)
        </div>
        <div class="toolbar-right">
            <a href="tambah.php" class="btn-primary">+ Tambah Mahasiswa</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php if(mysqli_num_rows($data) > 0): ?>
            <?php while($d = mysqli_fetch_assoc($data)): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($d['nim']); ?></td>
                    <td><?php echo htmlspecialchars($d['nama']); ?></td>
                    <td><?php echo htmlspecialchars($d['alamat']); ?></td>
                    <td class="aksi-link">
                        <a class="aksi-edit" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a class="aksi-hapus" href="hapus.php?id=<?php echo $d['id']; ?>"
                           onclick="return confirm('Hapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="empty">Belum ada data mahasiswa.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
