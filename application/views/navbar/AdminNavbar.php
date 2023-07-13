<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .sidebar {
            height: 100vh;
            width: 290px;
            background-color: black;
            color: #ffc107;
            position: fixed;
            margin-top: -35px;
            z-index: 2;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            padding: 11px;
        }

        .sidebar li a {
            color: #ffc107;
            text-decoration: none;
        }

    
        .content {
            margin-left: 270px;
            padding: -20px;
            color: #000;
            display: inline;
        }

        .section-divider {
            margin-top: 5px;
            border-top: 1px solid #ffc107;
        }

        .sidebar-header {
            padding: 20px;
            background-color: #ffc107;
            text-align: center;
            margin-top: 100px;
        }

        .sidebar-header h2 {
            margin: 0;
            font-size: 20px;
            color: #000;
        }

        header {
            height: 65px;
            width: 100vw;
            background-color: white;
            color: black;
            display: flex;
            justify-content: space-between;
            position: fixed;
            align-items: center;
            top: 0;
        }

        .user-label {
            font-size: 14px;
            margin-right: 5px;
            display: flex;
            align-items: center;
            display: block;
        }

    </style>
</head>

<body>
    <header>
        <div class="logo-container">
        </div>
        <span class="user-label">User: <?php echo $user['role']; ?>
        </span>
    </header>

    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Zenco Foostep</h2>
        </div>
        <ul>
            <li class="dashboard-link"><a href="<?php echo site_url('Dashboard'); ?>">Dashboard</a></li>
            <div class="section-divider"></div>
            <li><a href="<?php echo site_url('HRController'); ?>">Human Resource Management</a></li>
            <div class="section-divider"></div>
            <li><a href="<?php echo site_url('Dashboard/Logout'); ?>">Logout</a></li>
        </ul>
    </div>

    <script>
        function showDashboardImage() {
            var imageContainer = document.getElementById('imageContainer');
            imageContainer.style.display = 'flex';
        }
        showDashboardImage();
    </script>

</body>

</html>