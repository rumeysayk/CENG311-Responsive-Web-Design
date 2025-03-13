<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <title>Preview</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 50%;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Form Submission Preview</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p><strong>Name:</strong> " . (!empty($_POST['name']) ? htmlspecialchars($_POST['name']) : "Not provided") . "</p>";
            echo "<p><strong>Username:</strong> " . (!empty($_POST['uname']) ? htmlspecialchars($_POST['uname']) : "Not provided") . "</p>";
            echo "<p><strong>Password:</strong> " . (!empty($_POST['pass']) ? "******" : "Not provided") . "</p>";
            echo "<p><strong>Address:</strong> " . (!empty($_POST['address']) ? htmlspecialchars($_POST['address']) : "Not provided") . "</p>";
            echo "<p><strong>Country:</strong> " . (!empty($_POST['country']) ? htmlspecialchars($_POST['country']) : "Not provided") . "</p>";
            echo "<p><strong>ZIP Code:</strong> " . (!empty($_POST['zip']) ? htmlspecialchars($_POST['zip']) : "Not provided") . "</p>";
            echo "<p><strong>Email:</strong> " . (!empty($_POST['email']) ? htmlspecialchars($_POST['email']) : "Not provided") . "</p>";
            echo "<p><strong>Sex:</strong> " . (!empty($_POST['sex']) ? htmlspecialchars($_POST['sex']) : "Not provided") . "</p>";
            
            echo "<p><strong>Languages:</strong> ";
            if (!empty($_POST['language'])) {
                echo implode(", ", $_POST['language']);
            } else {
                echo "Not provided";
            }
            echo "</p>";

            echo "<p><strong>About:</strong> " . (!empty($_POST['comment']) ? htmlspecialchars($_POST['comment']) : "Not provided") . "</p>";
        } else {
            echo "<p style='color: red; text-align: center;'>No form data received. Please go back and fill the form.</p>";
        }
        ?>
    </div>

</body>

</html>
