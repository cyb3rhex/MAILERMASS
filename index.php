<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MAILERMASS</title>
</head>

<body>

    <h1>
        <img src="logo.png" alt="logo">
    </h1>
    <form method="post" action="enviar_email.php" enctype="multipart/form-data">
        <label for="from">Sender:</label><br>
        <input type="email" id="from" name="from" required><br><br>

        <label for="subject">Message Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>

        <label for="file">Insert .txt of emails:</label><br>
        <input type="file" id="file" name="file" accept=".txt" required><br><br>

        <input type="submit" value="Send">
    </form>

</body>

</html>