<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Registration page</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <h2>Welcome to Fakebook</h2>

        <label>Username:</label><br>
        <input type="text" name="username" placeholder="enter your username"></input><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="enter password here"></input><br><br>

        <input type="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="female"> Female <br>
        <input type="radio" name="gender" value="other"> Other <br> <br>

        <label> DOB:</label> <br>
        <input type="date" name="dob" value="dob"><br><br>
        <label> Mobile no:</label> <br>
        <input type="number" maxlength="10" name="mobile" value="mobile" placeholder="enter you mobile no"><br><br>


        <input type="submit" name="confirm" value="confirm" />


    </form>

    <?php
    $getuser = $_POST["username"];
    echo $getuser . "<br>";
    $getpass = $_POST["password"];
    echo $getpass . "<br>";

    $hash = password_hash($getpass, PASSWORD_DEFAULT);
    echo $hash;
    //$dob = $$_POST["dob"];

    if (isset($_POST["confirm"])) {
        if (isset($_POST["gender"])) {
            $gender = $_POST["gender"];
            echo $gender;
        } else {
            echo "Please make a selectiion";
        }
    }
    ?>
</body>

</html>

<?php
//mysqli_close($conn);

?>