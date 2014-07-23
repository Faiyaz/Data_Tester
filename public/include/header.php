<?php
$pos = strpos($_SERVER['SCRIPT_NAME'], 'data');
if ($pos !== false) // data page
{
    chdir('../..'); // Makes current directory into the application root
} else { // home page
    chdir('..'); // Makes current directory into the application root
}
?>
<?php require_once 'helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data tester</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div class="container">