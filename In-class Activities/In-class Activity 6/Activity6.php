<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Registration Form</h1>
    
    <form action="Activity6-Preview.php" method="POST">
        <table>

            <tr>
                <td> Name:</td>
                <td><input type="text" name="name" size="20" required autofocus autocomplete="off"> </td>
            </tr>

            <tr>
                <td>User Name:</td>
                <td><input type="text" name="uname" size="20" required autofocus autocomplete="off"> </td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" size="20" required /> </td>
            </tr>

            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" autocomplete="off"></td>
            </tr>

            <tr>
                <td>Country:</td>
                <td>
                    <select name="country" required>
                        <option value="USA">USA</option>
                        <option value="Turkiye">TURKIYE</option>
                        <option value="Germany">GERMANY</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>ZIP Code:</td>
                <td><input type="text" name="zip" /> </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" autocomplete="off" required /> </td>
            </tr>

            <tr>
                <td>Sex:</td>
                <td>
                    <input type="radio" name="sex" value="male">Male
                    <input type="radio" name="sex" value="female">Female
                </td>
            </tr>

            <tr>
                <td>Language:</td>
                <td>
                    <label><input type="checkbox" name="language[]" value="english">English</label>
                    <label><input type="checkbox" name="language[]" value="french">French</label>
                    <label><input type="checkbox" name="language[]" value="german">German</label>
                </td>
            </tr>

            <tr>
                <td>About:</td>
                <td><textarea rows="4" cols="30" name="comment"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Submit" /></td>
            </tr>

        </table>
    </form>

</body>

</html>
