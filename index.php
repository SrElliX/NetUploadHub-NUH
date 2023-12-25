<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>File Upload</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file">Choose a file:</label>
            <input type="file" name="file" id="file" accept="image/*, video/*" required>
            <button type="submit">Upload</button>
        </form>
        <p>The files will be sent to the machine named: <strong>YourMachineName</strong></p>
    </div>
</body>
</html>
