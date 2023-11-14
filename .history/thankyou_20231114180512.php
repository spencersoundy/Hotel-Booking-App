<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
</head>
<body>
    <h1>Thank You!</h1>
    <p>Your message has been received. We appreciate your feedback.</p>
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
   
</body>
</html>
