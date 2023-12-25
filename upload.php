<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($_FILES['file']['name']);

            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
                echo '<h2>File Uploaded Successfully</h2>';
                echo '<p>The file was received by the machine named: <strong>YourMachineName</strong></p>';
                echo '<p>File Name: <strong>' . htmlspecialchars($_FILES['file']['name']) . '</strong></p>';
            } else {
                echo '<h2>Error Uploading File</h2>';
            }
        } else {
            echo '<h2>No File Submitted</h2>';
        }
        ?>
    </div>
</body>
</html>
