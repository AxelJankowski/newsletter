<?php

session_start();

if (isset($_POST['email'])) {

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (empty($email)) {

        $_SESSION['given_email'] = $_POST['email'];
        header('Location: index.php');

    } else {
        
        require_once 'database.php';

        $query = $db->prepare('INSERT INTO users VALUES (NULL, :email)');
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();

    }

} else {

    header('Location: index.php');
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
    <div class="container">
    
        <heaeder>
            <h1>Newsletter</h1>
        </header>

        <main>
            <article>
                <p>Thank you for signing up for the newsletter!</p>
            </article>
        </main>

    </div>
</body>
</html>