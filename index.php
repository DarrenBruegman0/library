<!--
Darren Bruegman
---------------
Purpose: main page that contains the form, and executes function logic
-->

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Checker</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>
    <?php
    include 'form.php';
    include 'functions.php';

    if ($_GET) {
        $rdate = $_GET['RDate'] ?? NULL;
        $ddate = $_GET['DDate'] ?? NULL;
        echo ('<h1 class="p-4 alert alert-primary mb-0 text-center">' . date_query($rdate, $ddate) . '</h1>');
    }
    ?>
</body>

</html>