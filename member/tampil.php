<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        /* Responsive background image */
        body {
            background: url('gymbum.jpg') no-repeat center center;
            background-size: contain;
            background-color: #f8f9fa;
            min-height: 100vh;
            padding: 20px;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Style for table container */
        .container-table {
            background-color: rgba(255, 255, 255, 0.9);
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
        tr, th, td {
            padding: 10px;
            text-align: center;
        }

        hr {
            border: 1px solid #89ABE3FF;
        }

        /* Hover effects for table rows */
        tr:hover {
            background-color: #f1f1f1; /* Light gray background */
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
            background-color: #5a0231; /* Darken slightly on hover */
            transform: scale(1.05); /* Slight zoom on hover */
        }

        /* Hover effect for action buttons */
        .btn-info:hover {
            background-color: #1d72b8; /* Darker blue */
        }

        .btn-danger:hover {
            background-color: #d9534f; /* Darker red */
        }

        /* Navbar Item Hover Effect */
        .navbar-nav .nav-item .nav-link:hover {
            background-color: #ddd;
            color: #333;
        }

        /* Back button at bottom-left */
        .btn-back {
            position: fixed;
            bottom: 20px;  /* Bottom of the page */
            left: 20px;    /* Left of the page */
            background-color: #AF1740;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .btn-back i {
            margin-right: 8px; /* Spacing between the icon and text */
        }

        .btn-back:hover {
            background-color: #357ab7;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Management member</a>
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
                <th>Username</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Tanggal Bergabung</th>
                <th>Jenis Kelamin</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from member");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['Tanggal_lahir']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_telepon']; ?></td>
                    <td><?php echo $d['tanggal_bergabung']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                    <td><?php echo $d['password']; ?></td>
                    <td>
                        <a role="button" class="btn btn-info" href="ubah.php?id_member=<?php echo $d['id_member']; ?>">UBAH</a>
                        <a role="button" class="btn btn-danger" href="hapus.php?id_member=<?php echo $d['id_member']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </table>
    </div>

    <!-- Back Button (fixed at bottom-left) -->
    <a href="http://localhost/navigasi/navigasi.php" class="btn btn-back">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>

    <!-- Logout Button -->
    <a role="button" class="btn btn-logout" href="logout.php">Logout</a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2mJhABP9ZLpGVmZqvC2B7wCCF16Rta1IZjRbbM1sOB9iTXQfEMUF0bSOF5Y" crossorigin="anonymous"></script>
</body>
</html>
