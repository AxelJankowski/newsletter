<?php

session_start();

if (isset($_SESSION['logged_id'])) {
	header('Location: list.php');
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

        <header>
            <h1>Admin</h1>
        </header>

        <main>
            <article>
                <form method="post" action="list.php">
                    <label>Login <input type="text" name="login"></label>
                    <label>Password <input type="password" name="password"></label>
                    <input type="submit" value="Sign in!">

                    <?php
					if (isset($_SESSION['bad_attempt'])) {
						echo '<p>Wrong login or password!</p>';
						unset($_SESSION['bad_attempt']);
					}
					?>

                </form>
            </article>
        </main>

    </div>
</body>
</html>