<?php
include("../config.php");

if (!isset($_GET['id'])) {
    header('Location: ../admin/list-data.php');
    exit;
}


$id = $_GET['id'];

$sql = "SELECT * FROM bigdata WHERE id=$id";
$query = mysqli_query($dbconnect, $sql);
$data = mysqli_fetch_assoc($query);


if (!$data) {
    die("Data not found ..");
}
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
                <div class="logo">BaraTech Company</div>
                <ul class="nav-links">
                    <li class="nav-link"><a href="#">About</a></li>
                    <li class="nav-link"><a href="#">Youtube</a></li>
                    <li class="nav-link"><a href="#">More</a></li>
                </ul>
            </nav>
            <form action="../admin/edit-process.php" method="POST">
                <fieldset>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                    <p>
                        <label for="name">Name : </label>
                        <input type="text" name="name" placeholder="Full Name" value="<?php echo $data['name']; ?>" />
                    </p>
                    <p>
                        <label for="address">Address : </label>
                        <textarea name="address"><?php echo $data['address']; ?></textarea>
                    </p>
                    <p>
                        <label for="gender">Gender : </label>
                        <label><input type="radio" name="gender" value="Male" <?php echo ($data['gender'] == 'Male') ? "checked" : ""; ?>> Male</label>
                        <label><input type="radio" name="gender" value="Female" <?php echo ($data['gender'] == 'Female') ? "checked" : ""; ?>> Female</label>
                    </p>
                    <p>
                        <label for="religion">gender: </label>
                        <select name="religion">
                            <option value="Islam" <?php echo ($data['religion'] == 'Islam') ? "selected" : ""; ?>>Islam</option>
                            <option value="Kristen" <?php echo ($data['religion'] == 'Kristen') ? "selected" : ""; ?>>Kristen</option>
                            <option value="Hindu" <?php echo ($data['religion'] == 'Hindu') ? "selected" : ""; ?>>Hindu</option>
                            <option value="Budha" <?php echo ($data['religion'] == 'Budha') ? "selected" : ""; ?>>Budha</option>
                            <option value="Atheis" <?php echo ($data['religion'] == 'Atheis') ? "selected" : ""; ?>>Atheis</option>
                        </select>
                    </p>
                    <p>
                        <label for="school">School: </label>
                        <input type="text" name="school" placeholder="school" value="<?php echo $data['school']; ?>" />
                    </p>
                    <p>
                        <input type="submit" value="Save" name="save" />
                    </p>
                </fieldset>
            </form>
        </div>
</body>

</html>