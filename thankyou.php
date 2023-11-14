<?php
if(isset($_POST['download'])) {
    // Create a text file with some content
    $fileContent = "This is the content of the text file.\nThank you for downloading!";
    $fileName = 'downloaded_file.txt';

    // Set the appropriate headers for file download
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');

    // Output the file content
    echo $fileContent;
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Download Example</title>
</head>
<body>

<!-- Display a form with a button -->
<form method="post">
    <button type="submit" name="download">Download File</button>
</form>

<!-- Display a 'Thank you' message -->
<p>Thank you!</p>

</body>
</html>