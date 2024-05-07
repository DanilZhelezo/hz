<!DOCTYPE html>
<html>
<head>
    <title>Умножение чисел</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
            color: #333;
        }

        pre {
            font-size: 16px;
            white-space: pre-wrap;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Умножение чисел</h1>
    <form method="post" action="">
        <label for="num1">Первое число:</label>
        <input type="number" id="num1" name="num1" required><br>

        <label for="num2">Второе число:</label>
        <input type="number" id="num2" name="num2" required><br>

        <input type="submit" value="Умножить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = $num1 * $num2;

        echo "<h2>Результат умножения:</h2>";
        echo "<pre>";
        echo "$num1\n";
        echo "× $num2\n";
        echo "───────\n";
        echo "$result";
        echo "</pre>";
    }
    ?>
</body>
</html>
