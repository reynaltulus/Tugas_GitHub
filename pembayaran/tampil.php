<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Background image and gradient */
        body {
            background-image: linear-gradient(rgba(137, 171, 227, 0.7), rgba(93, 92, 97, 0.7)), url('transaksi.jpg'); /* Gradien overlay di atas gambar */
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #333;
            font-family: Arial, sans-serif;
        }

        /* Style for table container */
        .container-table {
            background-color: rgba(255, 255, 255, 0.9); /* Warna semi-transparan untuk container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 90%;
            width: 100%;
        }

        /* Style for table and elements */
        table {
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            transition: background-color 0.5s ease, transform 0.3s ease; /* Smooth hover effect */
        }
        hr {
            border: 1px solid #89ABE3;
        }

        /* Custom style for table row hover effect */
        tr:hover {
            background-color: #e1eaff;
            transform: scale(1.02);
        }

        /* Custom style for logout button */
        .btn-logout {
            background-color: #740938;
            color: white;
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-logout:hover {
            background-color: #5a0231;
        }

        /* Style for back button */
        .btn-back {
            position: fixed;
            bottom: 20px; /* Position the button at the bottom */
            left: 20px;  /* Position the button at the right */
            background-color: #AF1740;
            color: white;
            padding: 15px 30px;  /* Increase padding to make the button wider */
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;  /* Increase font size for better visibility */
            display: flex;
            align-items: center; /* Align the icon and text */
        }
        .btn-back:hover {
            background-color: #357ab7;
        }
        .btn-back i {
            margin-left: 10px; /* Add some space between the icon and text */
        }
    </style>
</head>
<body>
    <!-- Back Button -->
    <a href="http://localhost/navigasi/navigasi.php" class="btn btn-back">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Management pembayaran</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <form method="POST" action="tambah.php" class="d-inline">
                            <button type="submit" class="btn btn-outline-primary">Tambah</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Table Container -->
    <div class="container-table mt-5">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama pembayaran</th>
                <th>status</th>
                <th>id paket</th>
                <th>id pembayaran</th>
                <th>Aksi</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from pembayaran");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_pembayaran']; ?></td>
                    <td><?php echo $d['id_paket']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                    <td><?php echo $d['id_pembayaran']; ?></td>
                    <td>
                        <a role="button" class="btn btn-info" href="ubah.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>">UBAH</a>
                        <a role="button" class="btn btn-danger" href="hapus.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </table>
    </div>

    <!-- Logout Button -->
    <a role="button" class="btn btn-logout" href="logout.php">Logout</a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mJhABP9ZLpGVmZqvC2B7wCCF16Rta1IZjRbbM1sOB9iTXQfEMUF0bSOF5Y" crossorigin="anonymous"></script>
</body>
</html>
