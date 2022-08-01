<?php
$title = 'page d\acceuil';
print_r($_SERVER);

if(!function_exist('nav_items')) {
function nav_items(string $lien, string $title): string
{
    $classe = 'nav_items';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe.'active';
    };
    return <<<HTML 
    <li class="$classe">$classe</li>

    HTML;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

<?php if (isset($title)) { ?>
<?php echo '$title'; ?>
<?php } else { ?>
 <p>that website</p>
 <?php } ?>


    </title>
</head>
<body>
    <?php echo nav_items('blog.php', 'blog'); ?>
</body>
</html>