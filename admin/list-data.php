<?php
session_start();
include("../config.php");

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: sign.php");
    exit;
}

$user_name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/indexStyle.css">
    <title>Welcome | BaraTech Company</title>
</head>

<body>
    <div class="container">
        <div class="glass-container">
            <nav class="navbar">
                <div class="logo">BaraTech Company</a></div>
                <ul class="nav-links">
                    <li class="nav-link"><a href="#">About</a></li>
                    <li class="nav-link"><a href="#">Youtube</a></li>
                    <li class="nav-link"><a href="#">More</a></li>
                </ul>
            </nav>
            <div class="content">
                <div class="main">
                    <table border="1">
                        <nav>
                            <a href="../admin/form-input.php">[+] Add New Data</a>
                        </nav>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Religion</th>
                                <th>School</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM bigdata";
                            $query = mysqli_query($dbconnect, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>" . $data['id'] . "</td>";
                                echo "<td>" . $data['name'] . "</td>";
                                echo "<td>" . $data['address'] . "</td>";
                                echo "<td>" . $data['gender'] . "</td>";
                                echo "<td>" . $data['religion'] . "</td>";
                                echo "<td>" . $data['school'] . "</td>";
                                echo "<td>";
                                echo "<a href='form-edit.php?id=" . $data['id'] . "'>Edit</a> | ";
                                echo "<a href='delete.php?id=" . $data['id'] . "'>delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
                    <?php if (isset($_GET['status'])) : ?>
                        <p>
                            <?php
                            if ($_GET['status'] == 'success') {
                                echo "Add data successfully!";
                            } else {
                                echo "Add data Failed";
                            }
                            ?>
                        </p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>