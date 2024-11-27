<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling */
        body {
            background: linear-gradient(135deg, #D7C49E, #343148);
            color: white;
            padding-top: 80px; /* Offset for fixed navbar */
            padding: 20px;
        }
        h2, h3 {
            text-align: center;
        }
        .container-table {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: black;
            max-width: 600px;
            margin: auto;
        }
        .container-table table {
            width: 100%;
        }
        .container-table input[type="text"], 
        .container-table select, 
        .container-table .btn-primary {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="tampil.php">Data Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="tampil.php" class="btn btn-outline-primary">Kembali</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a role="button" class="btn btn-success me-2" href="login.php">Login</a>
                    <a role="button" class="btn btn-danger" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content: Update Form -->
    <div class="container-table mt-5">
        <h2>Update Data</h2>
        <h3>Data karyawan</h3>

        <?php
        include 'koneksi.php';
        $id = $_GET['id_karyawan'];
        $data = mysqli_query($koneksi,"select * from karyawan where id_karyawan='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
                <input type="hidden" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>">
                <table class="table">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="<?php echo $d['username']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password" value="<?php echo $d['password']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?php echo $d['email']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td><input type="text" name="no_telepon" value="<?php echo $d['no_telepon']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="text" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Karyawan Status</td>
                        <td>
                            <select class="form-control" name="karyawan_status" required>
                                <option value=""></option>
                                <option value="sudah bayar">sudah bayar</option>
                                <option value="belum bayar">belum bayar</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control" name="karyawan_status" required>
                                <option value=""></option>
                                <option value="laki-laki"> laki-laki</option>
                                <option value="perempuan"> perenpuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <input type="submit" value="SIMPAN" class="btn btn-primary">
                        </td>
                    </tr>		
                </table>
            </form>
            <?php 
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
