<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>

<body>
    <?php
    $name = $email = $website = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = input($_POST["name"]);
        $email = input($_POST["email"]);
        $website = input($_POST["website"]);
        $comment = input($_POST["comment"]);
        $gender = input($_POST["gender"]);
    }
    function input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo "Welcome " . $name;
    echo "<br>";
    echo "E-mail: " . $email;
    echo "<br>";
    echo "Website: " . $website;
    echo "<br>";
    echo "Comment: " . $comment;
    echo "<br>";
    echo "Gender: " . $gender;
    ?>
    
</body>

</html>