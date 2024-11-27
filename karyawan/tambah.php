<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #0063B2FF, #9CC3D5FF);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 20px;
        }
        .form-container {
            position: relative;
        }
        .btn-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        table {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        tr, th, td {
            padding: 10px;
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Close Button -->
        <button type="button" class="btn-close" aria-label="Close" onclick="goBack()"></button>

        <h3 class="text-center">Tambah Data Pengguna</h3>
        <form method="post" action="inputuser.php">
            <table class="table">
                <tr>
                    <td>Nama Karyawan</td>
                    <td><input class="form-control form-control-lg" type="text" name="nama_karyawan" required></td>
                </tr>
                <tr>            
                    <td>Tanggal Lahir</td>
                    <td><input class="form-control form-control-lg" type="date" name="tanggal_lahir" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input class="form-control form-control-lg" type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control form-control-lg" type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select class="form-control form-control-lg" name="jenis_kelamin" required>
                            <option value=""></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>No Telephone</td>
                    <td><input class="form-control form-control-lg" type="tel" name="no_telepon" required></td>
                </tr>
                <tr>
                    <td>Karyawan Status</td>
                    <td>
                        <select class="form-control form-control-lg" name="jenis_kelamin" required>
                            <option value=""></option>
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input class="form-control form-control-lg" type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a href="tampil.php" class="btn btn-success">Back</a>
                        </div>
                    </td>
                </tr>        
            </table>
        </form>
    </div>

    <script>
        // JavaScript function to go back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
