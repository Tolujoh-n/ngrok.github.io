<html>
    <head>
        <title>Guessing game for John severance</title>
    </head>

    <body>
        <h1>Welcome to my guessing game</h1>
        <p>
            <?php
            if ( ! isset($_GET['guess']) ) {
                echo("missing guess paramater");
            } else if ( strlen($_GET['guess']) < 1 ) {
                echo("your guess is too short");
            } else if ( ! is_numeric($_GET['guess']) ) {
                echo("your guess is not a number");
            } else if ( $_GET['guess'] < 37 ) {
                echo("your guess is too low");
            } else if ( $_GET['guess'] > 37 ) {
                echo("your guess is too high");
            } else {
                echo("Congratulation - you are right");
            }
            ?>
        </p>
    </body>
</html>