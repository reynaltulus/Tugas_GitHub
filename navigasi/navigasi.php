<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Reynal</title>
    <style>
        /* Basic styling for navbar and background */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            background-image: url('ronni.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .navbar {
            background-color: rgba(51, 51, 51, 0.9);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 50px 14px 20px;
        }

        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .menu-icon, .cancel-icon {
            padding: 14px 20px;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        /* Search form styling */
        .search-form {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        .search-form input {
            padding: 8px;
            margin-right: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-form button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #218838;
        }

        /* Dropdown menu styling */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 50px;
            background-color: rgba(51, 51, 51, 0.9);
            width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar a {
                display: none;
            }
            .menu-icon {
                display: block;
            }
            .search-form {
                width: 100%;
                justify-content: flex-start;
            }
        }
    </style>
</head>
<body>

<div class="navbar" id="myNavbar">
    <a href="javascript:void(0);" class="menu-icon" onclick="toggleDropdown()">&#9776;</a>
    <a href="http://localhost/navigasi/login.php" class="cancel-icon">&#10006;</a>
    
    <!-- Centered Search Form -->
    <form class="search-form" id="searchForm" role="search">
        <input class="form-control me-2" type="search" id="searchInput" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <!-- Dropdown menu content -->
    <div id="dropdownMenu" class="dropdown-content">
        <a href="http://localhost/navigasi/login.php">Login</a>
        <a href="http://localhost/karyawan/tampil.php">Karyawan</a>
        <a href="http://localhost/member/tampil.php">Member</a>
        <a href="http://localhost/pembayaran/tampil.php">Pembayaran</a>
        <a href="http://localhost/video/video.php">Video</a> <!-- Updated link -->
    </div>
</div>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById("dropdownMenu");
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }

    // Handle search form submission
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const searchQuery = document.getElementById('searchInput').value.trim();
        if (searchQuery) {
            let section = 'karyawan'; 
            if (searchQuery.toLowerCase().includes('member')) {
                section = 'member';
            } else if (searchQuery.toLowerCase().includes('pembayaran')) {
                section = 'pembayaran';
            }else if (searchQuery.toLowerCase().includes('video')){
                section = 'video';
            }

            const urlMap = {
                'karyawan': `http://localhost/karyawan/tampil.php?search=${searchQuery}`,
                'member': `http://localhost/member/tampil.php?search=${searchQuery}`,
                'pembayaran': `http://localhost/pembayaran/tampil.php?search=${searchQuery}`,
                'video': `http://localhost/video/video.php?search=${searchQuery}`,
            };

            window.location.href = urlMap[section];
        }
    });

    // Close dropdown when clicking outside
    window.onclick = function(event) {
        if (!event.target.matches('.menu-icon')) {
            const dropdown = document.getElementById("dropdownMenu");
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            }
        }
    };
</script>

</body>
</html>
