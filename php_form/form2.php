<html>

<body>
    <h2>PHP Form</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        First Name: <input type="text" name="fname"><br><br>
        Last Name: <input type="text" name="lname"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        <input type="Submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        Welcome <?php echo $_POST["fname"];?> <br>
        Your Email is : <?php echo $_POST["email"];
    }
    ?>

</body>

</html>