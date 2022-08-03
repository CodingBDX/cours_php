<?php
$err = null;
$success = null;
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'toto';
        file_put_contents($file, $email.PHP_EOL, FILE_APPEND);
        $success = 'mail bien reçu';
        print_r($success);
        $email = null;
    } else {
        $err = 'email invalide';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="newletter.php" method="POST">
    <input type="email" name="email" placeholder="entrer votre mail" required>
    <button type="submit">soumettre</button>
</form>
</body>
</html>