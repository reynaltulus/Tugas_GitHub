<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* Styling */
        body {
            background: linear-gradient(135deg, #D7C49E, #343148);
            color: white;
            padding-top: 100px; /* Offset for fixed navbar */
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
        input[type="text"], .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="tampil.php">Data Management pembayaran</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        $id = $_GET['id_pembayaran'];
        $data = mysqli_query($koneksi,"select * from pembayaran where id_pembayaran='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
                <input type="hidden" name="id_pembayaran" value="<?php echo $d['id_pembayaran']; ?>">
                <table class="table">
                    <tr>
                        <td>id pembayaran</td>
                        <td><input type="text" name="id_member" value="<?php echo $d['id_pembayaran']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>status</td>
                        <td><input type="text" name="status" value="<?php echo $d['status']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>id paket</td>
                        <td><input type="text" name="id_paket" value="<?php echo $d['id_paket']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>id_member</td>
                        <td><input type="text" name="id_member" value="<?php echo $d['id_member']; ?>" required></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mJhABP9ZLpGVmZqvC2B7wCCF16Rta1IZjRbbM1sOB9iTXQfEMUF0bSOF5Y" crossorigin="anonymous"></script>
</body>
</html>
