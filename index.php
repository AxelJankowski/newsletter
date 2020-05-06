<?php

session_start();

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
                <form method="post" action="save.php">
                    <label>Enter e-mail address:
                        <input type="email" name="email" <?= isset($_SESSION['given_email']) ? 'value="' . $_SESSION['given_email'] . '"' : '' ?>>
                    </label>
                    <input type="submit" value="Sign up!">

                    <?php
                        if (isset($_SESSION['given_email'])) {
                            echo '<p>Email address is incorrect.</p>';
                            unset($_SESSION['given_email']);
                        }
                    ?>

                </form>
            </article>
        </main>

    </div>
</body>
</html>