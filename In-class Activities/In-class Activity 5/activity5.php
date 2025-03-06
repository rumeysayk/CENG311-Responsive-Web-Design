<?php
// Variables to store form data and conversion values
$converted_amount = "";
$input_amount = "";

$source_currency = "";
$target_currency = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Currency Converter</title>
	<meta name="description" content="CENG 311 Inclass Activity 5" />
</head>

<body>

    <?php
    // Process the form submission
    if (isset($_GET['amount']) && isset($_GET['source_currency']) && isset($_GET['target_currency'])) {
        // Assign user input to variables
        $input_amount = floatval($_GET['amount']);
        $source_currency = $_GET['source_currency'];
        $target_currency = $_GET['target_currency'];

        // Define exchange rates
        $rates = [
            "USD_USD" => 1, "CAD_CAD" => 1, "EUR_EUR" => 1,
            "USD_CAD" => 1.43, "USD_EUR" => 0.93,
            "CAD_USD" => 0.70, "CAD_EUR" => 0.65,
            "EUR_USD" => 1.08, "EUR_CAD" => 1.55
        ];

        // Default result value
        $converted_amount = 0;

        // Perform currency conversion
        $conversion_key = str_replace("F", "", $source_currency) . "_" . str_replace("T", "", $target_currency);

        if (isset($rates[$conversion_key])) {
            $converted_amount = $input_amount * $rates[$conversion_key];
        } else {
            $converted_amount = "Invalid Conversion";
        }
    }
    ?>

    <form action="" method="GET">
        <table>
            <tr>
                <td>From:</td>
                <td>
                    <input type="text" name="amount" value="<?php echo $input_amount; ?>" required />
                </td>
                <td>Currency:</td>
                <td>
                    <select name="source_currency">
                        <option value="FUSD" <?php if ($source_currency === 'FUSD') echo 'selected'; ?>>USD</option>
                        <option value="FCAD" <?php if ($source_currency === 'FCAD') echo 'selected'; ?>>CAD</option>
                        <option value="FEUR" <?php if ($source_currency === 'FEUR') echo 'selected'; ?>>EUR</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>To:</td>
                <td>
                    <input type="text" name="converted" value="<?php echo $converted_amount; ?>" readonly />
                </td>
                <td>Currency:</td>
                <td>
                    <select name="target_currency">
                        <option value="TUSD" <?php if ($target_currency === 'TUSD') echo 'selected'; ?>>USD</option>
                        <option value="TCAD" <?php if ($target_currency === 'TCAD') echo 'selected'; ?>>CAD</option>
                        <option value="TEUR" <?php if ($target_currency === 'TEUR') echo 'selected'; ?>>EUR</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: right;">
                    <input type="submit" value="Convert" />
                </td>
            </tr>
        </table>
    </form>

</body>

</html>
