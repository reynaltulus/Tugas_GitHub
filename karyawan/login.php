<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #89ABE3FF, #FCF6F5FF);
            min-height: 100vh;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white for readability */
            border: none;
        }
        /* Hide spinner and success message initially */
        #loadingSpinner, #successMessage {
            display: none;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="card shadow-sm p-4" style="width: 22rem;">
        <h3 class="text-center mb-4">Login Karyawan</h3>
        <form method="POST" action="ceklogin.php" onsubmit="showLoading(event)">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="masukkan username anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password anda" required>
                <!-- Show/hide password toggle -->
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                    <label class="form-check-label" for="showPassword">Show password</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" id="loginButton" class="btn btn-success">Login</button>
            </div>
            <!-- Spinner -->
            <div class="text-center mt-3" id="loadingSpinner">
                <div class="spinner-border text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <!-- Success Message -->
            <div class="alert alert-success mt-3 text-center" id="successMessage">
                Login berhasil!
            </div>
        </form>
    </div>

    <!-- JavaScript to handle spinner, redirection, and password toggle -->
    <script>
        function showLoading(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
            document.getElementById('loadingSpinner').style.display = 'block'; // Show spinner
            document.getElementById('loginButton').disabled = true; // Disable login button

            // Simulate loading and login success
            setTimeout(() => {
                document.getElementById('loadingSpinner').style.display = 'none'; // Hide spinner
                document.getElementById('successMessage').style.display = 'block'; // Show success message
                window.location.href = "tampil.php"; // Redirect to the data display page
            }, 2000); // Adjust timing as needed
        }

        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordType = passwordInput.getAttribute('type');
            passwordInput.setAttribute('type', passwordType === 'password' ? 'text' : 'password');
        }
    </script>
</body>
</html>
