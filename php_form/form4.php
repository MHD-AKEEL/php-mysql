<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Required Fields</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr =  $genderErr = $websiteErr = "";
    $name = $email = $website = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is Require";
        } else {
            $name = test($_POST["name"]);

            // check if name only contains letter and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only Letter And White Space Allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is Require";
        } else {
            $email = test($_POST["email"]);

            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid Email Format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test($_POST["website"]);

            // check if URL address syntex is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is Require";
        } else {
            $gender = test($_POST["gender"]);
        }
    }

    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation</h2>
    <p><span class="error">*Required Field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span><br><br>
        E-mail: <input type="email" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span><br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"> <?php echo $websiteErr; ?></span><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"> <?php echo $comment; ?></textarea><br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>

    <?php
    echo "<h2>Your Input</h2>";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

    ?>
</body>

</html>