<?php
$age = null;
if (!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
}

if (!empty($_COOKIE['birthday'])) {
    $anniversaire = (int) $_COOKIE['birthday'];
    $age = (int) date('Y') - $anniversaire;
}

// if (!empty($__GET['action'])) {
    //     setcookie('utilisateur, '', time() -60);
// }
$set = [
    'nom' => 'johnny',
    'prenom' => 'lolo',
    'age' => 34,
];
// var_dump(serialize($set));
// setcookie('website', serialize($set));
// $utilisateur = $__COOKIE['website'];
// var_dump(unserialize($utilisateur));

// $nom = null;
// if (!empty($__COOKIE['utilisateur'])) {
    //     $nom = $__COOKIE['utilisateur'];
// }
// if (!empty($_POST['name'])) {
        //     setcookie('utilisateur', $_POST['name']);
        //     $nom = $_POST['name'];
// }
// var_dump($__COOKIE);

// $err = null;
// $success = null;
// if (!empty($_POST['email'])) {
            //     $email = $_POST['email'];
            //     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //         $file = __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'toto';
                //         file_put_contents($file, $email.PHP_EOL, FILE_APPEND);
                //         $success = 'mail bien reçu';
//         print_r($success);
//         $email = null;
//     } else {
    //         $err = 'email invalide';
//     }
// }
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
        
       
       sdefghjkl 
       <?php if ($age && $age >= 18) { ?>
       <h1>vous etes majeur</h1>
       <?php } else { ?>
  <form action="" method="post">
<select name="birthday" id="birthday">
<?php for ($i = 2010; $i > 1910; --$i) { ?>
        
        <option value="<?php echo $i; ?>"><?php echo $i;
    ?></option>
        <?php } ?>

</select>
<button type="submit">soumettre</button>
        </form>
      
                <?php } ?>

    
<!-- <form action="newletter.php" method="POST">
    <input type="email" name="email" placeholder="entrer votre mail" required>
    <button type="submit">soumettre</button>
</form> -->
</body>
</html>