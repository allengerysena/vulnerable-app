<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping Utility</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="text"]:invalid {
            border-color: red;
        }
        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        pre {
            background-color: #f8f8f8;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ping Utility</h1>
        <form method="POST" action="">
            <label for="ip">Enter IP Address:</label>
            <input type="text" id="ip" name="ip" placeholder="e.g. 8.8.8.8" pattern="^(\d{1,3}\.){3}\d{1,3}$" required title="the example is 8.8.8.8">
            <input type="submit" name="Submit" value="Ping">
        </form>

        <?php
        if (isset($_POST['Submit'])) {
            // Get input
            $target = $_REQUEST['ip'];

            // Determine OS and execute the ping command.
            if (stristr(php_uname('s'), 'Windows NT')) {
                // Windows
                $cmd = shell_exec('ping ' . $target);
            } else {
                // *nix
                $cmd = shell_exec('ping -c 4 ' . $target);
            }

            // Feedback for the end user
            $html .= "<pre>{$cmd}</pre>";
            echo $html; // Display the ping result
        }
        ?>
    </div>
</body>
</html>
