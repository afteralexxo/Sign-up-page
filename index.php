<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="asset/jquery-3.6.1.js"></script>
    <title>Mail</title>
</head>
<body>

         <form id="form-page" action="include/mail.php" method="POST">
            <h1>Sign Up</h1>
            <input class="item item-1" id="mail-name" type="text" name="full-name" placeholder="Full_Name"><br>
            <input class="item item-2 e-mail" id="mail-email" type="text" name="e-mail" placeholder="E-mail"><br>
            <input class="item item-3 zip-code" id="mail-zip" type="number" name="postal-code" placeholder="Postal_Code"><br>
            <button class="item item-4" id="mail-submit" name="submit-btn" type="submit">SUBMIT</button><br>
            <p class="item item-5" id="form-message"></p>

    <script src="script.js"></script>
</body>
</html>