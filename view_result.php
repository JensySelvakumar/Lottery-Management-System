<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Lottery</title>
    <link rel="stylesheet" href="css/style.css?version=51">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styleFurther.css?version=51">
</head>

<body>

    <header>
        <div class="heading">
            <h1>e_lottery</h1>

            <a href="#" class="button">
                <div id="one"></div>
                <div id="two"></div>
                <div id="three"></div>
            </a>
        </div>

        <nav class="head">
            <div class="link">
                <div class="link1"></div>
                <a href="checkResult.php">
                    Result
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="index.php" class="active">
                    Logout
                </a>
            </div>
        </nav>



    </header>

    <main>


        <div class="box">

            <div class="head">
                <h3>Lottery Results</h3>
            </div>
            <div class="main">
                <div class="element">
                    <label>Winner is</label>
                         <?php
                            session_start();
                            $name = $_SESSION['name'];
                            $prize = $_SESSION['prize'];
                            $number = $_SESSION['number'];
                            echo "<label>Name : $name</label>";
                            echo "<br>";
                            echo "<br>";
                            echo "<label>Lottery Number : $number</label>";
                            echo "<br>";
                            echo "<br>";
                            echo "<label>Prize : $prize</label>";

                        ?>
                        <label>CONGRATS!!</label>
                    </div>
            </div>
        </div>

        </div>

    </main>


    <footer>

        <p>&copy; 2022 e_lottery</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>