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
    <?php
    // Content for the text file
    $fileContent = "Thank you for your message!\n";
    $fileContent .= "Name: John Doe\n";
    $fileContent .= "Email: john.doe@example.com\n";
    $fileContent .= "Message: This is a sample message.\n";

    // Save the content to a temporary file
    $fileName = 'thankyou_message.txt';
    file_put_contents($fileName, $fileContent);
    ?>

    <!-- Provide a download link for the text file -->
    <p>Click the link below to download a summary of your message:</p>
    <a href="<?php echo $fileName; ?>" download>Download Message</a>

    <?php
    // Optional: Delete the temporary file a
    unlink($fileName);
    ?>
</body>
</html>
