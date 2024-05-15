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
            <form action="../admin/input-process.php" method="POST">
                <fieldset>
                    <p>
                        <label for="name">Name : </label>
                        <input type="text" name="name" placeholder="Full Name" />
                    </p>
                    <p>
                        <label for="address">Address : </label>
                        <textarea name="address"></textarea>
                    </p>
                    <p>
                        <label for="gender">Gender : </label>
                        <label><input type="radio" name="gender" value="Male"> Male</label>
                        <label><input type="radio" name="gender" value="Female"> Female</label>
                    </p>
                    <p>
                        <label for="religion">religion: </label>
                        <select name="religion">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                    </p>
                    <p>
                        <label for="school">School: </label>
                        <input type="text" name="school" placeholder="School" />
                    </p>
                    <p>
                        <input type="submit" value="Input" name="input" />
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
    </div>
</body>

</html>